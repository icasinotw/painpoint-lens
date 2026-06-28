<?php
/**
 * site/api/tg-queue-lib.php
 * Telegram 書評「批次排隊 + 斷路器 + 自動續跑」核心。
 *
 * 2026-06-29 改成「單一共用隊列 + 多槽(multi-slot)」以支援雙 Claude 帳號平行寫拆書:
 *   狀態檔(flock 保護)= {
 *     queue:[{book,author,tries}],                          待寫清單(單一共用,不分帳號)
 *     slots:[{book,author,tries,lane,started_at}],          目前在跑(最多 count(TG_LANES) 格,每格標記用哪個帳號)
 *     lane_fail:{lane=>int}, disabled_lanes:[lane],         逐帳號斷路器:某帳號連敗就停那帳號,不波及其他
 *     paused:bool, pause_manual:bool, paused_at:int,        全域暫停(主人 /pause,或所有帳號都掛)
 *     cron_*, deploy_*                                       主機端心跳
 *   }
 *   規則:**一本書從同一個 queue 只被 pop 一次、塞進一個 slot** → 結構上不可能兩個帳號寫到同一本(無需任何去重)。
 *        一本跑完工作流回報結果 → q_report():
 *          - 成功 → 釋放該 slot、補下一本。
 *          - 失敗(quality)→ 該本放回隊尾重試、繼續跑下一本,絕不暫停。
 *          - 失敗(engine,疑似 usage 用完)→ 連敗 +1;達門檻 → 暫停(書全留著、通知主人);
 *            同一本失敗達上限 → 跳過(疑似爛輸入)。
 *          - 暫停後:cron 每 5 分 q_resume();或主人打 /resume。
 *
 *   **TG_LANES 開關決定同時用幾個帳號**:預設 ['a'](= 行為與單槽時代完全一致、單帳號序列)。
 *   開了第二個 Claude 帳號、token 驗過後,在 config-tg.php 加 `define('TG_LANES', ['a','b']);` 才真的雙線。
 *   花錢開帳號 B 之前,系統等於完全沒變(slots 最多 1 格)。
 */
require_once __DIR__ . '/config-tg.php';   // $TG_BOT_TOKEN, $TG_ALLOWED_CHAT_ID, $TG_WEBHOOK_SECRET, $GH_DISPATCH_PAT, $TG_QUEUE_SECRET[, define('TG_LANES', [...])]

// 啟用的 lane(= 同時可跑幾個帳號)。解析順序:
//   ① 若已 define(測試或 config-tg.php 覆蓋)→ 用它;
//   ② 否則讀可部署的開關檔 site/api/active-lanes.php(return ['a'] 或 ['a','b']);
//   ③ 都沒有 → 預設只用 lane a(= 與單帳號時代完全一致)。
// 這樣「開第二個帳號」只要改 active-lanes.php(push + 部署即生效)+ 在 GitHub 加 token secret,不必動主機機密檔。
if (!defined('TG_LANES')) {
    $_lf = __DIR__ . '/active-lanes.php';
    $_lanes = is_file($_lf) ? @include $_lf : null;
    define('TG_LANES', (is_array($_lanes) && $_lanes) ? array_values($_lanes) : ['a']);
}

const TG_STALE_SECS    = 1800;   // 30 分沒回報視為卡死 → 看門狗接手。實測每本 14~21 分,30 分留足餘裕又救得快;
                                 // 回報已改冪等後,看門狗就算誤判(某本真的還在跑),那本之後的回報會被冪等忽略、絕不掉書、不重複,
                                 // 所以門檻可以壓短。主機 cron 每 5 分巡一次 → 卡住後最遲 ~30 分自救(原 90→50→30)。
const TG_FAIL_THRESHOLD = 2;     // 同一帳號連續 engine 失敗達此數 → 停用『那個帳號』(疑似該帳號用量用完)
const TG_MAX_TRIES      = 8;     // 同一本失敗達此數 → 跳過(疑似爛輸入/寫不出來);設大以免長時間斷量誤砍好書
const TG_LANE_BACKOFF   = 1800;  // 帳號被停用後,cron 至少隔這麼久(秒,30 分)才「派一本探路」重試 → 額度滿期間不洗版空轉。
                                 // weekly 額度本來就要好幾小時才回,慢 ~30 分偵測幾乎無影響;主人 /resume 則立刻重試、不等 back-off。

function _q_path() {
    if (!empty($GLOBALS['TG_QUEUE_PATH'])) return $GLOBALS['TG_QUEUE_PATH'];   // 測試覆寫(production 永不設)
    $priv = dirname(__DIR__, 2) . '/private_html';
    if (is_dir($priv) && is_writable($priv)) return $priv . '/tg-queue.json';
    return __DIR__ . '/.tg-queue.json';
}

function _q_load($fh) {
    rewind($fh);
    $raw = stream_get_contents($fh);
    $d = json_decode((string)$raw, true);
    if (!is_array($d)) $d = [];

    // slots:目前在跑的多槽。若狀態檔還是舊 schema(current/running/started_at)→ 平滑遷移成單一 slot。
    $slots = null;
    if (isset($d['slots']) && is_array($d['slots'])) {
        $slots = array_values(array_filter($d['slots'], 'is_array'));
    } else {
        $slots = [];
        if (isset($d['current']) && is_array($d['current'])) {
            $cur = $d['current'];
            if (!isset($cur['lane']))       $cur['lane'] = 'a';
            if (!isset($cur['started_at'])) $cur['started_at'] = (int)($d['started_at'] ?? 0);
            $slots[] = $cur;
        }
    }

    // 斷路器改逐帳號(per-lane):某帳號連續 engine 失敗 → 只停那個帳號,其他照跑。
    //   lane_fail: {lane => 連續 engine 失敗次數};disabled_lanes: 已自動停用的帳號清單(達門檻)。
    //   舊 schema 的全域 consec_fail → 遷移成 lane a 的計數。
    $laneFail = isset($d['lane_fail']) && is_array($d['lane_fail']) ? $d['lane_fail']
              : (isset($d['consec_fail']) && (int)$d['consec_fail'] > 0 ? ['a' => (int)$d['consec_fail']] : []);
    $disabled = isset($d['disabled_lanes']) && is_array($d['disabled_lanes']) ? array_values($d['disabled_lanes']) : [];

    return [
        'queue'       => isset($d['queue']) && is_array($d['queue']) ? $d['queue'] : [],
        'slots'       => $slots,
        'lane_fail'      => $laneFail,
        'disabled_lanes' => $disabled,
        'disabled_at'    => isset($d['disabled_at']) && is_array($d['disabled_at']) ? $d['disabled_at'] : [],         // {lane=>停用時刻}:給 cron back-off 重試用
        'down_notified'  => isset($d['down_notified']) && is_array($d['down_notified']) ? array_values($d['down_notified']) : [], // 已發過「暫停」通知的帳號(去重,避免洗版)
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
function _q_slot_lane($s) {
    return is_array($s) ? ($s['lane'] ?? 'a') : 'a';
}

// 內部(需在 lock 內):釋放 STALE 的 slot —— 卡住那本回隊尾重試(未達上限),並空出它的 lane。
// 回傳被釋放的書名清單(看門狗拿去通知主人)。暫停時不動 slot(讓在跑的寫完)。
function _q_reap_stale(&$d) {
    $reaped = [];
    if ($d['paused']) return $reaped;
    $now  = time();
    $keep = [];
    foreach ($d['slots'] as $s) {
        $st = (int)($s['started_at'] ?? 0);
        if ($st > 0 && ($now - $st > TG_STALE_SECS)) {
            $tries = (int)($s['tries'] ?? 1);
            $book  = q_item_book($s);
            $lane  = _q_slot_lane($s);
            if ($tries < TG_MAX_TRIES) {
                unset($s['lane'], $s['started_at']);
                $d['queue'][] = $s;                 // 回隊尾稍後自動重試
                $reaped[] = ['book' => $book, 'gaveup' => false, 'lane' => $lane];
            } else {
                $reaped[] = ['book' => $book, 'gaveup' => true,  'lane' => $lane];
            }
            // 回報掉了不算引擎失敗:重置該帳號計數並重新啟用它,別誤把好帳號停掉
            $d['lane_fail'][$lane] = 0;
            $d['disabled_lanes'] = array_values(array_diff($d['disabled_lanes'], [$lane]));
            unset($d['disabled_at'][$lane]);
        } else {
            $keep[] = $s;
        }
    }
    $d['slots'] = $keep;
    return $reaped;
}

// 內部(需在 lock 內):把空著的 lane 補滿 —— while(有空 lane 且 queue 非空 且 未暫停)
//   從「單一共用 queue」pop 一本 → 指派一個空 lane → 推進 slots。回傳「要 dispatch 的 item 清單」(各含 lane)。
// 先 reap stale(自我修復),確保卡死的 lane 會被釋放再填。
function _q_fill_slots(&$d) {
    if ($d['paused']) return [];
    _q_reap_stale($d);
    $dispatch = [];
    $lanes = array_values(array_diff(TG_LANES, $d['disabled_lanes']));   // 排除被斷路器停用的帳號
    while (!empty($d['queue'])) {
        $busy = array_map('_q_slot_lane', $d['slots']);
        $free = array_values(array_diff($lanes, $busy));
        if (empty($free)) break;                    // 所有可用 lane 都在忙(或都被停用)
        $lane = $free[0];
        $it = array_shift($d['queue']);
        $it['tries']      = (int)($it['tries'] ?? 0) + 1;
        $it['lane']       = $lane;
        $it['started_at'] = time();
        $d['slots'][] = $it;
        $dispatch[]   = $it;
    }
    return $dispatch;
}

// 內部:在 slots 裡找對應的 slot index。優先 (book,lane) 精準;退一步只比 book。
//   沒帶 book(舊呼叫/cron)→ 回第一個 slot(維持舊行為:當成那唯一在跑的)。
function _q_find_slot($slots, $book, $lane = '') {
    if ($book === '') return empty($slots) ? null : 0;
    foreach ($slots as $i => $s) {
        if (q_item_book($s) === $book && ($lane === '' || _q_slot_lane($s) === $lane)) return $i;
    }
    foreach ($slots as $i => $s) {
        if (q_item_book($s) === $book) return $i;
    }
    return null;
}

// 觸發一次 GitHub 工作流(書名 + 作者 + lane 放進 client_payload)
function q_dispatch($item) {
    if (!empty($GLOBALS['TG_TEST_NODISPATCH'])) return true;   // 本機測試用:不真的打 GitHub
    global $GH_DISPATCH_PAT;
    $book   = q_item_book($item);
    $author = is_array($item) ? ($item['author'] ?? '') : '';
    $lane   = _q_slot_lane($item);
    // 寫拆書(/lens)+ 推薦書 都跑在公開 repo painpoint-lens(公開 = GitHub Actions 免費無上限)。
    $ch = curl_init('https://api.github.com/repos/icasinotw/painpoint-lens/dispatches');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(
            ['event_type' => 'write-review', 'client_payload' => ['book_name' => $book, 'author' => $author, 'lane' => $lane]],
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

// 書名(+作者)入列;有空 lane 且未暫停就立刻開跑(可能一次補滿多個 lane)。
// 回傳 ['started'=>bool,'paused'=>bool,'now_book'=>?string,'queued_len'=>int,'running'=>int]
function q_enqueue_and_maybe_start($book, $author = '') {
    $book = trim((string)$book);
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);

    // 防同名重複入列:書名若已在 queue 或 slots 就不重複加。
    //   為什麼重要:單一共用 queue 已保證「同一筆只會被一個 lane 抽走」,但若使用者把同一本送兩次
    //   (兩筆),兩筆可能分別被兩個帳號抽到 → 兩帳號寫同一本 → 撞同一個 slug。在源頭擋掉就結構性杜絕重複。
    //   (跨時間「重寫已上線的書」另由工作流的 ALREADY_LIVE 預檢擋。)
    $dup = $book === '' ||
           in_array($book, q_book_list($d['queue']), true) ||
           in_array($book, q_book_list($d['slots']),  true);
    if (!$dup) {
        $d['queue'][] = ['book' => $book, 'author' => $author, 'tries' => 0];
    }

    $toDispatch = $d['paused'] ? [] : _q_fill_slots($d);
    _q_save($fh, $d);
    $pending = count($d['queue']);
    $paused  = $d['paused'];
    $running = count($d['slots']);
    flock($fh, LOCK_UN);
    fclose($fh);

    foreach ($toDispatch as $it) q_dispatch($it);
    return [
        'started'    => !empty($toDispatch),
        'paused'     => $paused,
        'duplicate'  => $dup,
        'now_book'   => !empty($toDispatch) ? q_item_book($toDispatch[0]) : null,
        'queued_len' => $pending,
        'running'    => $running,
    ];
}

// 工作流回報一本跑完的結果。
//   $status: 'success' | 'failure'
//   $kind  : 失敗種類(只在 failure 時看)——
//            'engine'  = Claude 引擎那步自己掛了(usage 用完 / API 報錯 / 中斷)→ 唯一會累計、達門檻才暫停的。
//            其餘(''/'quality')= 寫一半沒收尾、品質閘沒過、部署瞬斷 → 引擎是好的 → 跳過這本、繼續下一本,絕不暫停。
//   $book  : 這通回報「是哪一本」(冪等鑰匙)。只有 book 對得上某個 slot 才動作;對不上(已被看門狗接手/重複/過期)→ 忽略,可放心狂重試。
//   $lane  : 這通回報「是哪個帳號跑的」(精準定位 slot;沒帶也能只靠 book 找)。
// 設計理由:品質/收尾失敗只跟「這一本」有關,對其他在跑的書毫無預測力,拿來暫停整列是純損失;
//          只有「引擎本身連續報錯」才代表後面每一本都會掛(usage/當機),那才該暫停保護(暫停只擋「再補新槽」,在跑的讓它寫完)。
function q_report($status, $kind = '', $book = '', $lane = '') {
    $success  = ($status === 'success');
    $isEngine = ($kind === 'engine');   // 唯一會推向暫停的失敗種類
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);

    $idx = _q_find_slot($d['slots'], $book, $lane);

    // 冪等守門:帶了 book 但找不到對應 slot → 這通是重試/重複/過期 → 不動作(可安全狂重試)
    if ($book !== '' && $idx === null) {
        $paused = $d['paused'];
        flock($fh, LOCK_UN);
        fclose($fh);
        return ['ignored' => true, 'reason' => 'stale-or-duplicate', 'paused' => $paused, 'dispatched' => null];
    }

    $cur    = ($idx !== null) ? $d['slots'][$idx] : null;
    $laneOf = $cur ? _q_slot_lane($cur) : ($lane !== '' ? $lane : 'a');   // 這通回報屬於哪個帳號
    if ($idx !== null) array_splice($d['slots'], $idx, 1);   // 釋放該 slot
    $notify = null;

    if ($success) {
        // 該帳號恢復:清它的連敗計數、若曾被停用就重新啟用
        $d['lane_fail'][$laneOf] = 0;
        $d['disabled_lanes'] = array_values(array_diff($d['disabled_lanes'], [$laneOf]));
        unset($d['disabled_at'][$laneOf]);
        // 這個帳號先前發過「暫停」通知 → 現在額度恢復了,補一則「恢復」通知(整個 outage 只通知這一次)
        if (in_array($laneOf, $d['down_notified'], true)) {
            $d['down_notified'] = array_values(array_diff($d['down_notified'], [$laneOf]));
            $notify = "▶️ 帳號 lane {$laneOf} 額度恢復了,已自動接上繼續寫。";
        }
        // 若先前因「所有帳號都掛」觸發過全域斷路器暫停(非手動),現在有帳號恢復 → 解除全域暫停
        if ($d['paused'] && !$d['pause_manual']
            && count(array_intersect(TG_LANES, $d['disabled_lanes'])) < count(TG_LANES)) {
            $d['paused'] = false; $d['paused_at'] = 0;
        }
    } else {
        // 先處理這一本:重試上限到了就跳過,否則丟回隊尾稍後重試(不論哪種失敗都不丟書)
        if ($cur !== null) {
            $tries = (int)($cur['tries'] ?? 1);
            if ($tries >= TG_MAX_TRIES) {
                $notify = "⚠️《" . q_item_book($cur) . "》連續失敗 {$tries} 次,先跳過(可能書名怪或這本一直寫不出來),其餘照跑。";
            } else {
                unset($cur['lane'], $cur['started_at']);
                $d['queue'][] = $cur;   // 放回隊尾,稍後重試
            }
        }

        if ($isEngine) {
            // 「這個帳號」引擎掛 → 只累計這個帳號;達門檻 → 只停用這個帳號(其他帳號照跑,不波及)。
            $d['lane_fail'][$laneOf] = (int)($d['lane_fail'][$laneOf] ?? 0) + 1;
            if ($d['lane_fail'][$laneOf] >= TG_FAIL_THRESHOLD) {
                if (!in_array($laneOf, $d['disabled_lanes'], true)) $d['disabled_lanes'][] = $laneOf;
                $d['disabled_at'][$laneOf] = time();   // 記停用時刻 → cron 隔 back-off 才派一本探路重試
                // 只在「第一次暫停這個帳號」通知;之後每 ~back-off 的探路重試若再失敗,不再洗版
                if (!in_array($laneOf, $d['down_notified'], true)) {
                    $d['down_notified'][] = $laneOf;
                    $mins = (int)(TG_LANE_BACKOFF / 60);
                    $p = "⏸️ 帳號 lane {$laneOf} 連續 {$d['lane_fail'][$laneOf]} 次引擎失敗(疑似這個帳號 usage 用完 / token 壞)—— 已暫停『這個帳號』,其他帳號照常跑。額度回來會自動接上(約每 {$mins} 分探一次),或打 /resume 立刻試。";
                    $notify = $notify ? ($notify . "\n\n" . $p) : $p;
                }
                // 啟用中的帳號「全部」都掛了 → 等同全域斷路器暫停(沿用舊單帳號行為:cron 會自動 resume)
                if (count(array_intersect(TG_LANES, $d['disabled_lanes'])) >= count(TG_LANES)) {
                    $d['paused'] = true;
                    if (!$d['paused_at']) $d['paused_at'] = time();
                }
            }
        } else {
            // 品質/收尾/部署失敗 → 引擎是好的(Claude 有跑、只是產出沒過閘)→ 清這個帳號的連敗計數、確保它沒被停用。
            $d['lane_fail'][$laneOf] = 0;
            $d['disabled_lanes'] = array_values(array_diff($d['disabled_lanes'], [$laneOf]));
            unset($d['disabled_at'][$laneOf]);
            if (in_array($laneOf, $d['down_notified'], true)) {   // 引擎活著 = 額度回來了 → 補恢復通知(只一次)
                $d['down_notified'] = array_values(array_diff($d['down_notified'], [$laneOf]));
                $notify = $notify ? ($notify . "\n\n▶️ 帳號 lane {$laneOf} 額度恢復了。") : "▶️ 帳號 lane {$laneOf} 額度恢復了,已自動接上。";
            }
        }
    }

    $toDispatch = $d['paused'] ? [] : _q_fill_slots($d);
    _q_save($fh, $d);
    $paused = $d['paused'];
    flock($fh, LOCK_UN);
    fclose($fh);

    foreach ($toDispatch as $it) q_dispatch($it);
    if ($notify) tg_notify($notify);
    return ['paused' => $paused, 'dispatched' => !empty($toDispatch) ? q_item_book($toDispatch[0]) : null];
}

// 手動暫停隊列(主人收到「額度快滿」通知時打 /pause,或從 ?action=pause)。
//   - paused=true 後,_q_fill_slots 一律不補新槽 → 正在跑的 slot 寫完回報後「不會」再派下一本。
//   - 看門狗 / reap 要求 !paused → 暫停期間完全不打轉、不累加 tries、不發看門狗通知,剩下的書原封不動留著。
// 刻意「不動」slots:此刻若真有書在 Actions 跑,讓它們跑完、正常上線;暫停只擋「下一本」。
// 之後 /resume(或 cron 的 q_resume)解除、從隊首接著補滿空 lane。冪等:已暫停再呼叫也安全。
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
    $running_books = q_book_list($d['slots']);
    $current = !empty($running_books) ? $running_books[0] : null;
    $running = count($d['slots']);
    flock($fh, LOCK_UN);
    fclose($fh);
    return ['paused' => true, 'already' => $already, 'pending' => $pending,
            'current' => $current, 'running' => $running, 'running_books' => $running_books];
}

// 解除暫停、續跑(把空著的 lane 補滿)。
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
    $toDispatch = [];

    if ($d['paused'] && !$manual && $d['pause_manual']) {
        // 自動續跑遇到「主人手動全域暫停」→ 原封不動,等主人自己解
        $skipped_manual = true;
    } else {
        $now = time();
        // 要重新啟用哪些被停用的帳號:手動 /resume → 全部立刻;cron 自動 → 只放行「back-off 已過」的
        // (額度滿期間 cron 才不會每 5 分就派一本探路 → 不洗版、不空轉)。
        $reenable = [];
        foreach ($d['disabled_lanes'] as $l) {
            if ($manual || ($now - (int)($d['disabled_at'][$l] ?? 0) >= TG_LANE_BACKOFF)) {
                $reenable[] = $l;
            }
        }
        foreach ($reenable as $l) {
            $d['disabled_lanes'] = array_values(array_diff($d['disabled_lanes'], [$l]));
            unset($d['disabled_at'][$l]);
            $d['lane_fail'][$l] = 0;
            if ($manual) {   // 主人手動續 → 連「已通知暫停」記號也清(下次若再滿,會重新通知一次)
                $d['down_notified'] = array_values(array_diff($d['down_notified'], [$l]));
            }
        }
        // 全域暫停解除:手動一律解;cron → 只要重新啟用後「還有可用帳號」就解
        $stillAllDown = count(array_intersect(TG_LANES, $d['disabled_lanes'])) >= count(TG_LANES);
        if ($d['paused'] && ($manual || !$stillAllDown)) {
            $d['paused'] = false; $d['pause_manual'] = false; $d['paused_at'] = 0;
            $resumed = true;
        }
        if (!empty($reenable)) $resumed = true;
        if ($resumed) $toDispatch = _q_fill_slots($d);   // 補滿空 lane(在跑中的不動;卡死的會被 reap 救回)
    }

    _q_save($fh, $d);
    $pending = count($d['queue']);
    flock($fh, LOCK_UN);
    fclose($fh);
    foreach ($toDispatch as $it) q_dispatch($it);
    return ['resumed' => $resumed, 'skipped_manual' => $skipped_manual,
            'dispatched' => !empty($toDispatch) ? q_item_book($toDispatch[0]) : null, 'pending' => $pending];
}

// 看門狗(主機 cron / GitHub cron 呼叫):救回「slot 卡死但其實沒在跑」的隊列。
// 情境:某本跑完了、回報那通卻掉了(HTTP 415 或 SSH 被擋)→ 該 slot 永遠卡著、那條 lane 不會再補書。
// 規則:逐 slot 看 started_at 是否超過 STALE;卡住那本丟回隊尾重試(2026-06-27 起改 requeue 而非靜默跳過——
//   實測卡住多半是 SSH 被擋 → 部署也失敗 → 書根本沒上線,舊版「跳過」會害這種書既沒上線又被丟掉)。
//   靠 tries(pop 時已 +1)+ TG_MAX_TRIES 上限收斂,不會無限重寫。達上限才真的放棄並通知。
//   釋放卡死的 slot 後,把空出來的 lane 補上下一本。
function q_watchdog() {
    $fh = fopen(_q_path(), 'c+');
    flock($fh, LOCK_EX);
    $d = _q_load($fh);

    $reaped = _q_reap_stale($d);                       // 釋放卡死的 slot(暫停時回 [])
    $toDispatch = $d['paused'] ? [] : _q_fill_slots($d);
    _q_save($fh, $d);
    flock($fh, LOCK_UN);
    fclose($fh);

    foreach ($toDispatch as $it) q_dispatch($it);

    $acted = !empty($reaped);
    if ($acted) {
        $mins = (int)(TG_STALE_SECS / 60);
        $next = !empty($toDispatch) ? ('《' . q_item_book($toDispatch[0]) . '》') : '(無,或所有 lane 仍忙)';
        foreach ($reaped as $r) {
            if (!empty($r['gaveup'])) {
                $tail = "已重試多次仍卡住,放棄這本(可能 SSH/主機長時間擋著);其餘照跑。";
            } else {
                $tail = "已把它丟回隊尾稍後自動重試(若是 SSH 被擋,恢復後會自己補上線);接著補:{$next}。";
            }
            tg_notify("🔧 看門狗:《{$r['book']}》卡住超過 {$mins} 分鐘沒回報。{$tail}");
        }
    }
    return [
        'acted'      => $acted,
        'stuck'      => array_map(function ($r) { return $r['book']; }, $reaped),
        'requeued'   => (bool)array_filter($reaped, function ($r) { return empty($r['gaveup']); }),
        'dispatched' => !empty($toDispatch) ? q_item_book($toDispatch[0]) : null,
    ];
}

// 從待寫隊列移除指定書名的項目(已上線/不想寫了/誤加)。回傳移除幾筆 + 剩幾本。不動 slots。
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
    // 衍生欄位(給端點/指令層方便用,維持與舊版相容的語意):
    $d['running']       = count($d['slots']) > 0;
    $d['running_count'] = count($d['slots']);
    $d['running_books'] = q_book_list($d['slots']);
    $d['current']       = !empty($d['slots']) ? $d['slots'][0] : null;   // 第一個在跑的(舊欄位相容)
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
    $ch = curl_init('https://api.github.com/repos/icasinotw/painpoint-lens/dispatches');
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
