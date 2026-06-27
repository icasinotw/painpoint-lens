<?php
/**
 * site/api/queue-report-cli.php
 * 「主機端 CLI 回報入口」—— 給 write-review 工作流『走 SSH』在主機上直接回報一本書跑完的結果,
 * 繞過 Cloudways 對 GitHub 機房 IP 偶發、且會持續好幾分鐘的 HTTP 415。
 *
 * 為什麼要這支(2026-06-27):
 *   實測《設計思考改造世界》回報走 HTTP GET,重試 30 次 / 5 分鐘「全部 415」——
 *   415 不是幾秒的小blip,而是會把那台 runner 的 IP 封鎖好幾分鐘 → 從同一台機器狂重試 HTTP 沒用。
 *   但同一個 run 的「SSH 部署(rsync)」是成功的 → SSH(port 22)這條路沒被擋,只有 HTTP(443)被擋。
 *   所以把「推進隊列的回報」也改走 SSH:runner ssh 進主機跑這支,完全避開 HTTP 415。
 *
 * 用法(由工作流 ssh 呼叫):
 *   php applications/<app>/public_html/api/queue-report-cli.php <success|failure> <kind> <book_base64>
 *   - book 用 base64 傳,避開書名含空白/冒號/引號時的 shell 跳脫問題。
 *   - q_report 已冪等(只認 book==current 才動作)→ 重複/過期呼叫 0 風險。
 *
 * 只准 CLI 跑(擋掉從 web 直接打)。
 */

if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    echo "queue-report-cli: CLI only\n";
    exit(1);
}

require_once __DIR__ . '/tg-queue-lib.php';

$status = (($argv[1] ?? '') === 'success') ? 'success' : 'failure';
$kind   = ($argv[2] ?? '') === 'engine' ? 'engine' : 'quality';   // 預設 quality(不誤暫停)
$book   = isset($argv[3]) ? (string)base64_decode((string)$argv[3], true) : '';

$r = q_report($status, $kind, $book);
echo json_encode(['ok' => true, 'status' => $status, 'kind' => $kind, 'book' => $book] + $r, JSON_UNESCAPED_UNICODE) . "\n";
