<?php
/**
 * site/api/queue-cron.php
 * 「主機端」隊列看門狗 + 自動續跑 —— 給 Cloudways 的 Cron Job 直接用 CLI 跑:
 *
 *     php /home/master_wqcrjzcjvx/applications/afrmpvsrbj/public_html/api/queue-cron.php
 *
 * 為什麼要這支(取代 / 補強 GitHub 的 queue-resume.yml):
 *   GitHub 免費版 `schedule:` 是 best-effort,常常延遲甚至整段跳過。某本書寫完、
 *   「回報那通 HTTP」剛好掉了 → 隊列卡死,得等下一次 GitHub 排程的看門狗才救;
 *   排程一拖,就像 2026-06-27 早上那樣卡了 4 個多小時。
 *   讓 painpoint.tw 主機自己每 ~10 分鐘跑一次,就不再靠 GitHub 排程、也不吃 Actions 額度,
 *   卡住最多 ~90 分鐘(STALE 門檻)就被自家主機救回。
 *
 * 做兩件事(都冪等、空跑 0 副作用,可安心高頻跑):
 *   1) q_resume()   —— 若隊列因「引擎連續失敗(疑似 usage 用完)」而暫停 → 解除、接著跑。
 *   2) q_watchdog() —— 若隊列「running 卡死但其實沒在跑」(回報掉了)→ 清掉接下一本。
 *
 * 安全:本地呼叫(CLI 或命令列 cgi=沒有 HTTP REQUEST_METHOD)放行;真正的 web 請求要帶 ?token 才准
 *      (避免被人從瀏覽器亂觸發)。這樣不論 Cloudways「Type php」cron 是用 php-cli 還是 php-cgi 跑都работ。
 *      —— 2026-06-27:舊版寫死 PHP_SAPI!=='cli' 就 403,若 Cloudways 以 cgi 跑此 cron 會被自己誤擋、形同沒設,
 *         所以改成「本地放行 / web 要 token」並加心跳,方便驗證 cron 是否真的在執行。
 */

require_once __DIR__ . '/tg-queue-lib.php';   // 內含 config-tg.php → $TG_QUEUE_SECRET

$sapi    = php_sapi_name();
$isLocal = ($sapi === 'cli') || empty($_SERVER['REQUEST_METHOD']);   // CLI 或 命令列 cgi(Cloudways cron)= 本地可信

// 心跳:每次被叫到都先記一筆(在守門「之前」),用來確認 cron 真的在跑 + 看它用哪個 SAPI。
q_cron_heartbeat($sapi, $isLocal ? 'local' : 'web');

if (!$isLocal) {
    // 真正的 web 請求 → 必須帶正確 token 才准跑(否則 403)
    $tok = $_GET['token'] ?? ($_SERVER['HTTP_X_QUEUE_TOKEN'] ?? '');
    if (!is_string($tok) || !hash_equals($TG_QUEUE_SECRET, $tok)) {
        http_response_code(403);
        echo "queue-cron: forbidden\n";
        exit(1);
    }
}

$ts = date('Y-m-d H:i:s');

$r = q_resume();
if ($r['resumed']) {
    echo "[$ts] resume: 解除暫停" . ($r['dispatched'] ? "、派發《{$r['dispatched']}》" : "(隊列空,轉 idle)") . "\n";
}

$w = q_watchdog();
if ($w['acted']) {
    $stuck = implode('、', array_map(function ($b) { return "《{$b}》"; }, (array)$w['stuck']));
    echo "[$ts] watchdog: {$stuck} 卡死已接手" . ($w['dispatched'] ? "、派發《{$w['dispatched']}》" : "(無或所有 lane 仍忙)") . "\n";
}

if (!$r['resumed'] && !$w['acted']) {
    echo "[$ts] ok: 隊列正常,無須動作(剩 {$r['pending']} 本待寫)\n";
}
