<?php
/**
 * site/api/tg-queue-lib.php
 * Telegram 書評「批次排隊 + 斷路器 + 自動續跑」核心。
 * 狀態檔(flock 保護)= {
 *   queue:[{book,author,tries}], current:{...}|null, running:bool, started_at:int,
 *   consec_fail:int, paused:bool, paused_at:int
 * }
 * 規則:server 端保證一次只有一本在 Actions 跑;一本跑完工作流回報結果 → q_report():
 *   - 成功 → 接下一本。
 *   - 失敗 → 連敗 +1、該本放回隊尾重試;連敗達門檻(疑似用量用完)→ 暫停(書全留著、通知主人);
 *            同一本失敗達上限 → 跳過(疑似爛輸入)。
 *   - 暫停後:cron 每小時 q_resume();或主人打 /resume。
 */
require_once __DIR__ . '/config-tg.php';   // $TG_BOT_TOKEN, $TG_ALLOWED_CHAT_ID, $TG_WEBHOOK_SECRET, $GH_DISPATCH_PAT, $TG_QUEUE_SECRET

const TG_STALE_SECS    = 1800;   // 30 分沒回報視為卡死 → 看門狗接手。實測每本 14~21 分,30 分留足餘裕又救得快;
                                 // 回報已改冪等後,看門狗就算誤判(某本真的還在跑),那本之後的回報會被冪等忽略、絕不掉書、不重複,
                                 // 所以門檻可以壓短。主機 cron 每 5 分巡一次 → 卡住後最遲 ~30 分自救(原 90→50→30)。
const TG_FAIL_THRESHOLD = 2;     // 連續失敗達此數 → 暫停(疑似用量用完)
const TG_MAX_TRIES      = 8;     // 同一本失敗達此數 → 跳過(疑似爛輸入/寫不出來);設大以免長時間斷量誤砍好書

function _q_path() {
    $priv = dirname(__DIR__, 2) . '/private_html';
    if (is_dir($priv) && is_writable($priv)) return $priv . '/tg-queue.json';
    return __DIR__ . '/.tg-queue.json';
}

function _q_load($fh) {
    rewind($fh);
    $raw = stream_get_contents($fh);
    $d = json_decode((string)$raw, true);
    if (!is_array($d)) $d = [];
    return [
        'queue'       => isset($d['queue']) && is_array($d['queue']) ? $d['queue'] : [],
        'current'     => isset($d['current']) && is_array($d['current']) ? $d['current'] : null,
        'running'     => !empty($d['running']),
        'started_at'  => (int)($d['started_at'] ?? 0),
        'consec_fail' => (int)($d['consec_fail'] ?? 0),
        'paused'      => !empty($d['paused']),
        'pause_manual'=> !empty($d['pause_manual']),   // true=主人手動 /pause(cron 不准自動解除,只有 /resume 能解)
        'paused_at'   => (int)($d['paused_at'] ?? 0),
        // 主機端 cron 心跳(用來驗證 queue-cron.php 真的在跑、用哪個 SAPI):
        'cron_last_run' => (int)($d['cron_last_run'] ?? 0),
        'cron_sapi'     => (string)($d['cron_sapi'] ?? ''),
        'cron_note'     => (string)($d['cron_note'] ?? ''),
        // 主機端「自動 pull 部署」心跳(git-deploy.php):
        'deploy_last_run' => (int)($d['deploy_last_run'] ?? 0),
        'deploy_commit'   => (string)($d['deploy_commit'] ?? ''),
        'deploy_rc'       => (int)($d['deploy_rc'] ?? -1),
        'deploy_note'     => (string)($d['deploy_note'] ?? ''),
    ];
}

// 主機端 cron 心跳:queue-cron.php 每次跑都記一筆(在 SAPI 守門「之前」呼叫),
// 之後用 ?action=status 看 cron_last_run 是不是最近、cron_sapi 是不是 cli,
// 就能判斷「cron 到底有沒有在執行 + 有沒有被 SAPI 守門誤擋」。
function q_cron_heartbeat($sapi, $note = '') {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $d['cron_last_run'] = time();
    $d['cron_sapi']     = (string)$sapi;
    $d['cron_note']     = (string)$note;
    _q_save($fh, $d);
    flock($fh, LOCK_UN);
    fclose($fh);
}

// 主機端自動部署心跳:git-deploy.php 每次跑完記一筆,用 ?action=status 看 deploy_last_run / commit / rc 驗證。
function q_deploy_heartbeat($commit, $rc, $note = '') {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $d['deploy_last_run'] = time();
    $d['deploy_commit']   = (string)$commit;
    $d['deploy_rc']       = (int)$rc;
    $d['deploy_note']     = (string)$note;
    _q_save($fh, $d);
    flock($fh, LOCK_UN);
    fclose($fh);
}

function _q_save($fh, $d) {
    rewind($fh);
    ftruncate($fh, 0);
    fwrite($fh, json_encode($d, JSON_UNESCAPED_UNICODE));
    fflush($fh);
}

function q_item_book($item) {
    return is_array($item) ? ($item['book'] ?? '') : (string)$item;
}
function q_book_list($queue) {
    return array_map('q_item_book', $queue);
}

// 內部(需在 lock 內):拉隊首設為 current、回傳要 dispatch 的 item;沒得跑就轉 idle、回 null。
function _q_pop_next(&$d) {
    if ($d['paused'] || empty($d['queue'])) {
        $d['running'] = false;
        $d['current'] = null;
        if (empty($d['queue']) && !$d['paused']) $d['started_at'] = 0;
        return null;
    }
    $it = array_shift($d['queue']);
    $it['tries'] = (int)($it['tries'] ?? 0) + 1;
    $d['current']    = $it;
    $d['running']    = true;
    $d['started_at'] = time();
    return $it;
}

// 觸發一次 GitHub 工作流(書名 + 作者放進 client_payload)
function q_dispatch($item) {
    if (!empty($GLOBALS['TG_TEST_NODISPATCH'])) return true;   // 本機測試用:不真的打 GitHub
    global $GH_DISPATCH_PAT;
    $book   = q_item_book($item);
    $author = is_array($item) ? ($item['author'] ?? '') : '';
    // 寫拆書(/lens)已搬到公開 repo painpoint-lens(公開 = GitHub Actions 免費無上限)。
    // recommend-books 仍在私有 pain-point-book(見 q_dispatch_recommend)。
    $ch = curl_init('https://api.github.com/repos/icasinotw/painpoint-lens/dispatches');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(
            ['event_type' => 'write-review', 'client_payload' => ['book_name' => $book, 'author' => $author]],
            JSON_UNESCAPED_UNICODE
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_HTTPHEADER => [
            'Accept: application/vnd.github+json',
            'Authorization: Bearer ' . $GH_DISPATCH_PAT,
            'User-Agent: painpoint-tg-bot',
            'X-GitHub-Api-Version: 2022-11-28',
        ],
    ]);
    curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $code === 204;
}

// 書名(+作者)入列;閒置且未暫停就立刻開跑。
// 回傳 ['started'=>bool,'paused'=>bool,'now_book'=>?string,'queued_len'=>int]
function q_enqueue_and_maybe_start($book, $author = '') {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $d['queue'][] = ['book' => $book, 'author' => $author, 'tries' => 0];

    $toDispatch = null;
    $stale = $d['running'] && (time() - $d['started_at'] > TG_STALE_SECS);
    if (!$d['paused'] && (!$d['running'] || $stale)) {
        $toDispatch = _q_pop_next($d);
    }
    _q_save($fh, $d);
    $pending = count($d['queue']);
    $paused  = $d['paused'];
    flock($fh, LOCK_UN);
    fclose($fh);

    if ($toDispatch) q_dispatch($toDispatch);
    return [
        'started'    => $toDispatch !== null,
        'paused'     => $paused,
        'now_book'   => $toDispatch ? q_item_book($toDispatch) : null,
        'queued_len' => $pending,
    ];
}

// 工作流回報一本跑完的結果。
//   $status: 'success' | 'failure'
//   $kind  : 失敗種類(只在 failure 時看)——
//            'engine'  = Claude 引擎那步自己掛了(usage 用完 / API 報錯 / 中斷)→ 唯一會累計、達門檻才暫停的。
//            其餘(''/'quality')= 寫一半沒收尾、品質閘沒過、部署瞬斷 → 引擎是好的 → 跳過這本、繼續下一本,絕不暫停。
// 設計理由:品質/收尾失敗只跟「這一本」有關,對下一本(完全不同的書)毫無預測力,拿來暫停整列是純損失;
//          只有「引擎本身連續報錯」才代表後面每一本都會掛(usage/當機),那才該暫停保護。
//   $book  : 這通回報「是哪一本」的書名(冪等鑰匙)。2026-06-27 加:Cloudways 對 GitHub IP 的 415 是間歇、跟方法無關,
//            GET 也會偶中 → 回報可能掉。為了能「掉了就放心狂重試」,q_report 改成冪等:只有當帶的 book 跟現在的 current
//            一致才動作;不一致(隊列早已前進過/已被看門狗接手)→ 視為重複/過期回報,直接忽略、不再多跳一本。
//            沒帶 book(舊呼叫、cron)→ 維持原行為,不做冪等檢查。
function q_report($status, $kind = '', $book = '') {
    $success = ($status === 'success');
    $isEngine = ($kind === 'engine');   // 唯一會推向暫停的失敗種類
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $cur = $d['current'];

    // 冪等守門:帶了 book 但跟 current 對不上 → 這通是重試/重複/過期 → 不動作(可安全狂重試)
    if ($book !== '' && (!$cur || q_item_book($cur) !== $book)) {
        $paused = $d['paused'];
        flock($fh, LOCK_UN);
        fclose($fh);
        return ['ignored' => true, 'reason' => 'stale-or-duplicate', 'paused' => $paused, 'dispatched' => null];
    }

    $d['current'] = null;
    $notify = null;
    $toDispatch = null;

    if ($success) {
        $d['consec_fail'] = 0;
        $toDispatch = _q_pop_next($d);
    } else {
        // 先處理這一本:重試上限到了就跳過,否則丟回隊尾稍後重試(不論哪種失敗都不丟書)
        if ($cur !== null) {
            $tries = (int)($cur['tries'] ?? 1);
            if ($tries >= TG_MAX_TRIES) {
                $notify = "⚠️《" . q_item_book($cur) . "》連續失敗 {$tries} 次,先跳過(可能書名怪或這本一直寫不出來),其餘照跑。";
            } else {
                $d['queue'][] = $cur;   // 放回隊尾,稍後重試
            }
        }

        if ($isEngine) {
            // 引擎自己掛 → 累計;連續達門檻 → 疑似 usage 用完 / Anthropic 當機 → 暫停保護
            $d['consec_fail']++;
            if ($d['consec_fail'] >= TG_FAIL_THRESHOLD) {
                $d['paused']    = true;
                $d['paused_at'] = time();
                $d['running']   = false;
                $d['current']   = null;
                $remain = count($d['queue']);
                $p = "⏸️ 連續 {$d['consec_fail']} 次是 Claude 引擎本身失敗(很可能 usage 用完或 Anthropic 當機)—— 已暫停,剩下的 {$remain} 本原封不動留著。\n用量回來後每小時會自動續跑;想立刻試就打 /resume。";
                $notify = $notify ? ($notify . "\n\n" . $p) : $p;
            } else {
                $toDispatch = _q_pop_next($d);
            }
        } else {
            // 品質/收尾/部署失敗 → 引擎是好的 → 清掉引擎連敗計數、直接跑下一本,絕不暫停
            $d['consec_fail'] = 0;
            $toDispatch = _q_pop_next($d);
        }
    }

    _q_save($fh, $d);
    $paused = $d['paused'];
    flock($fh, LOCK_UN);
    fclose($fh);

    if ($toDispatch) q_dispatch($toDispatch);
    if ($notify) tg_notify($notify);
    return ['paused' => $paused, 'dispatched' => $toDispatch ? q_item_book($toDispatch) : null];
}

// 手動暫停隊列(主人收到「額度快滿」通知時打 /pause,或從 ?action=pause)。
//   - paused=true 後,_q_pop_next 一律回 null → 正在跑的那本寫完回報後「不會」再派下一本。
//   - 看門狗要求 !paused → 暫停期間完全不打轉、不累加 tries、不發看門狗通知,剩下的書原封不動留著。
// 刻意「不動」current/running:此刻若真有一本在 Actions 跑,讓它跑完、正常上線;暫停只擋「下一本」。
// 之後 /resume(或 cron 的 q_resume)解除、從隊首接著跑。冪等:已暫停再呼叫也安全。
function q_pause() {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $already = $d['paused'] && $d['pause_manual'];
    $d['paused'] = true;
    $d['pause_manual'] = true;     // 標記為「手動」→ 主機/GitHub cron 的自動續跑不會把它沖掉
    if (!$d['paused_at']) $d['paused_at'] = time();
    _q_save($fh, $d);
    $pending = count($d['queue']);
    $current = $d['current'] ? q_item_book($d['current']) : null;
    $running = $d['running'];
    flock($fh, LOCK_UN);
    fclose($fh);
    return ['paused' => true, 'already' => $already, 'pending' => $pending, 'current' => $current, 'running' => $running];
}

// 解除暫停、續跑。
//   $manual=false(cron / GitHub 排程的自動續跑):碰到「主人手動暫停(pause_manual)」→ 不解除,
//                一直停到主人自己 /resume。否則主機 cron 每 5 分鐘就會把手動暫停沖掉(= 形同沒暫停)。
//   $manual=true (主人在 Telegram 打 /resume):一律解除,不管是手動還是斷路器暫停。
// 自動斷路器暫停(引擎連敗)pause_manual=false → 自動續跑照樣解除、retry,維持原本行為不變。
function q_resume($manual = false) {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $resumed = false;
    $skipped_manual = false;
    $toDispatch = null;
    if ($d['paused'] && !$manual && $d['pause_manual']) {
        // 自動續跑遇到手動暫停 → 原封不動,等主人自己解
        $skipped_manual = true;
    } elseif ($d['paused']) {
        $d['paused']       = false;
        $d['pause_manual'] = false;
        $d['paused_at']    = 0;
        $d['consec_fail']  = 0;
        // 邊界:若暫停時還掛著一本「當時在跑、卻沒回報就被凍住」的 current(例:剛好在額度用光那刻被派出、
        // run 根本沒啟動),把它丟回隊首先重試,別讓它被接下來的 _q_pop_next 蓋掉而憑空消失。
        // 正常情況下那本會在暫停期間自己寫完回報、current 早已是 null,這段不會誤觸。
        if (is_array($d['current'])) {
            array_unshift($d['queue'], $d['current']);
            $d['current'] = null;
            $d['running'] = false;
        }
        $toDispatch = _q_pop_next($d);
        $resumed = true;
    }
    _q_save($fh, $d);
    $pending = count($d['queue']);
    flock($fh, LOCK_UN);
    fclose($fh);
    if ($toDispatch) q_dispatch($toDispatch);
    return ['resumed' => $resumed, 'skipped_manual' => $skipped_manual, 'dispatched' => $toDispatch ? q_item_book($toDispatch) : null, 'pending' => $pending];
}

// 看門狗(主機 cron / GitHub cron 呼叫):救回「running 卡死但其實沒在跑」的隊列。
// 情境:某本跑完了、回報那通卻掉了(HTTP 415 或 SSH 被擋)→ current 永遠卡著、什麼都不會動。
// 規則:若 running 且未暫停、且 started_at 已超過 STALE → 視為那本早該回報卻沒回報。
//   2026-06-27 改:把卡住那本「丟回隊尾重試」而非靜默跳過——因為實測卡住多半是 SSH 被擋 → 部署也失敗 → 書根本沒上線,
//   舊版「跳過」會害這種書既沒上線又被丟掉(山姆踩到《創意,從無到有》《AI經濟》)。改成 requeue,SSH 恢復後自動補上線;
//   靠 tries(pop 時已 +1)+ TG_MAX_TRIES 上限收斂,不會無限重寫。達上限才真的放棄並通知。
function q_watchdog() {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $acted = false; $stuckBook = null; $toDispatch = null; $requeued = false; $gaveup = false;
    $stale = $d['running'] && !$d['paused'] && $d['started_at'] > 0
             && (time() - $d['started_at'] > TG_STALE_SECS);
    if ($stale) {
        $cur = $d['current'];
        $stuckBook = $cur ? q_item_book($cur) : '(unknown)';
        $d['current']     = null;
        $d['consec_fail'] = 0;          // 回報掉了不算引擎失敗,別誤觸暫停
        // 卡住那本丟回隊尾重試(除非已達重試上限)
        if (is_array($cur)) {
            $tries = (int)($cur['tries'] ?? 1);
            if ($tries < TG_MAX_TRIES) { $d['queue'][] = $cur; $requeued = true; }
            else { $gaveup = true; }
        }
        $toDispatch = _q_pop_next($d);  // 接下一本(或隊列空 → idle)
        $acted = true;
    }
    _q_save($fh, $d);
    flock($fh, LOCK_UN);
    fclose($fh);

    if ($toDispatch) q_dispatch($toDispatch);
    if ($acted) {
        $mins = (int)(TG_STALE_SECS / 60);
        $next = $toDispatch ? ('《' . q_item_book($toDispatch) . '》') : '(無,隊列已空)';
        if ($gaveup) {
            $tail = "已重試多次仍卡住,放棄這本(可能 SSH/主機長時間擋著);其餘照跑。";
        } elseif ($requeued) {
            $tail = "已把它丟回隊尾稍後自動重試(若是 SSH 被擋,恢復後會自己補上線);先接下一本:{$next}。";
        } else {
            $tail = "已自動接下一本:{$next}。若它其實沒上線,重新加回即可。";
        }
        tg_notify("🔧 看門狗:《{$stuckBook}》卡住超過 {$mins} 分鐘沒回報。{$tail}");
    }
    return ['acted' => $acted, 'stuck' => $stuckBook, 'requeued' => $requeued, 'dispatched' => $toDispatch ? q_item_book($toDispatch) : null];
}

// 從待寫隊列移除指定書名的項目(已上線/不想寫了/誤加)。回傳移除幾筆 + 剩幾本。不動 current。
function q_dequeue($book) {
    $book = trim((string)$book);
    if ($book === '') return ['removed' => 0, 'pending' => 0];
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);
    $before = count($d['queue']);
    $d['queue'] = array_values(array_filter($d['queue'], function ($it) use ($book) {
        return q_item_book($it) !== $book;
    }));
    $removed = $before - count($d['queue']);
    _q_save($fh, $d);
    $pending = count($d['queue']);
    flock($fh, LOCK_UN);
    fclose($fh);
    return ['removed' => $removed, 'pending' => $pending];
}

function q_status() {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_SH);
    $d = _q_load($fh);
    flock($fh, LOCK_UN);
    fclose($fh);
    return $d;
}

// ── 推薦書 ────────────────────────────────────────────────────────────
// 判斷一則訊息是不是「推薦商業書」指令(「請推薦我10本經典商業書」/「再推薦10本」/「推薦幾本行銷的書」等)。
// 回傳 ['is'=>bool, 'count'=>int, 'topic'=>string]。不是推薦 → is=false。
function tg_parse_recommend($text) {
    $t = trim((string)$text);
    if ($t === '' || mb_strpos($t, '推薦') === false) {
        return ['is' => false, 'count' => 0, 'topic' => ''];
    }
    // 數量:先抓阿拉伯數字「N本/N 本」,沒有再抓中文數字,都沒有 → 預設 10
    $count = 0;
    if (preg_match('/(\d{1,3})\s*本/u', $t, $m)) {
        $count = (int)$m[1];
    } elseif (preg_match('/([一二三四五六七八九十兩]{1,3})\s*本/u', $t, $m)) {
        $count = _tg_cn_num($m[1]);
    }
    if ($count <= 0)  $count = 10;
    if ($count > 30)  $count = 30;   // 一次最多 30 本,免雲端跑太久

    // 主題(可選):「推薦幾本<主題>的書」→ 取「的書」前那段,再剝掉前面的指令字(推薦/幾/N本…)
    $topic = '';
    if (preg_match('/([\p{Han}A-Za-z0-9]{1,12})\s*的\s*書/u', $t, $m)) {
        $cand = preg_replace(
            '/^(請|幫我|幫|我|再|推薦|幾|本|一些|那些|這些|經典|商業|商管|[一二三四五六七八九十兩廿]+|\d+)+/u',
            '', trim($m[1]));
        $cand = trim($cand);
        if ($cand !== '' && !preg_match('/^(經典|商業|商管|好|書)$/u', $cand)) {
            $topic = $cand;
        }
    }
    return ['is' => true, 'count' => $count, 'topic' => $topic];
}

// 小工具:把 1～30 範圍的中文數字轉成阿拉伯(夠用就好)
function _tg_cn_num($s) {
    $d = ['零'=>0,'一'=>1,'二'=>2,'兩'=>2,'三'=>3,'四'=>4,'五'=>5,'六'=>6,'七'=>7,'八'=>8,'九'=>9];
    if ($s === '十') return 10;
    if (preg_match('/^十([一二三四五六七八九])$/u', $s, $m)) return 10 + $d[$m[1]];          // 十一～十九
    if (preg_match('/^([二三])十$/u', $s, $m))            return $d[$m[1]] * 10;              // 二十/三十
    if (preg_match('/^([二三])十([一二三四五六七八九])$/u', $s, $m)) return $d[$m[1]]*10 + $d[$m[2]]; // 廿一～
    if (isset($d[$s])) return $d[$s];
    return 0;
}

// 觸發一次「推薦商業書」的 GitHub 工作流(獨立於書評隊列;不排隊、不走斷路器)。
function q_dispatch_recommend($count, $topic = '') {
    if (!empty($GLOBALS['TG_TEST_NODISPATCH'])) return true;   // 本機測試:不真的打 GitHub
    global $GH_DISPATCH_PAT;
    $ch = curl_init('https://api.github.com/repos/icasinotw/pain-point-book/dispatches');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(
            ['event_type' => 'recommend-books',
             'client_payload' => ['count' => (int)$count, 'topic' => (string)$topic]],
            JSON_UNESCAPED_UNICODE
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_HTTPHEADER => [
            'Accept: application/vnd.github+json',
            'Authorization: Bearer ' . $GH_DISPATCH_PAT,
            'User-Agent: painpoint-tg-bot',
            'X-GitHub-Api-Version: 2022-11-28',
        ],
    ]);
    curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $code === 204;
}

// 解析一行「書名(+作者)」→ [書名, 作者]
function tg_parse_book($line) {
    $line = trim($line);
    $author = '';
    if (preg_match('/^(.*?)[\s,，、]*作者\s*[:：]?\s*(.+)$/su', $line, $m)) {
        $head = trim($m[1]);
        $author = trim($m[2]);
    } else {
        $head = $line;
    }
    if (preg_match('/[《「『]([^》」』]+)[》」』]/u', $head, $bm)) {
        $book = trim($bm[1]);
    } else {
        $book = $head;
    }
    $book = preg_replace('#^/\S+\s*#u', '', $book);
    $book = preg_replace('/^(請\s*)?(幫我\s*)?撰寫\s*/u', '', $book);
    $book = preg_replace('/\s*(的書評|書評|拆書)\s*$/u', '', $book);
    $book = preg_replace('/painpoint/i', '', $book);
    return [trim($book), trim($author)];
}

// 傳訊息回 Telegram(指定 chat)
function tg_send($token, $chatId, $text) {
    if (!empty($GLOBALS['TG_TEST_NODISPATCH'])) return;   // 本機測試用
    if ($chatId === '' || $chatId === null) return;
    $ch = curl_init("https://api.telegram.org/bot{$token}/sendMessage");
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query(['chat_id' => $chatId, 'text' => $text]),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
    ]);
    curl_exec($ch);
    curl_close($ch);
}

// 主動通知主人(暫停/跳過等)
function tg_notify($text) {
    global $TG_BOT_TOKEN, $TG_ALLOWED_CHAT_ID;
    tg_send($TG_BOT_TOKEN, (string)$TG_ALLOWED_CHAT_ID, $text);
}
