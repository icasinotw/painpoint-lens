<?php
/**
 * site/api/tg-queue.php
 * 給「工作流 / cron」呼叫的端點(不是給 Telegram)。用 X-Queue-Token / ?token 驗證(TG_QUEUE_SECRET)。
 *   ?action=report&status=success|failure[&kind=engine|quality]  工作流每本跑完回報 → 決定接下一本 / 暫停 / 跳過
 *                                           kind=engine 才會累計暫停(usage/API 掛);其餘失敗一律跳過繼續
 *   ?action=pause                           手動暫停:不再派下一本(正在跑的那本會寫完上線);用 resume 解除
 *   ?action=resume                          解除暫停續跑(cron 每小時 / 手動)
 *   ?action=watchdog                        救回「running 卡死但沒在跑」的隊列(cron 每小時)
 *   ?action=status                          看隊列狀態
 */
require_once __DIR__ . '/tg-queue-lib.php';

header('Content-Type: application/json; charset=utf-8');

$tok = $_SERVER['HTTP_X_QUEUE_TOKEN'] ?? ($_GET['token'] ?? '');
if (!is_string($tok) || $tok === '' || !hash_equals($TG_QUEUE_SECRET, $tok)) {
    http_response_code(403);
    echo json_encode(['ok' => false]);
    exit;
}

$action = $_GET['action'] ?? '';
if ($action === 'report') {
    $status = ($_GET['status'] ?? 'success') === 'success' ? 'success' : 'failure';
    $kind   = ($_GET['kind'] ?? '') === 'engine' ? 'engine' : 'quality';   // 預設 quality(沒帶 kind 的舊呼叫也不會誤暫停)
    $book   = isset($_GET['book']) ? (string)$_GET['book'] : '';            // 冪等鑰匙:這通回報是哪一本(可放心狂重試)
    $lane   = isset($_GET['lane']) ? (string)$_GET['lane'] : '';            // 哪個帳號跑的(精準定位 slot;沒帶也能只靠 book 找)
    $r = q_report($status, $kind, $book, $lane);
    echo json_encode(['ok' => true] + $r, JSON_UNESCAPED_UNICODE);
} elseif ($action === 'done') {                 // 舊別名:當成功處理
    $r = q_report('success');
    echo json_encode(['ok' => true] + $r, JSON_UNESCAPED_UNICODE);
} elseif ($action === 'pause') {
    $r = q_pause();
    echo json_encode(['ok' => true] + $r, JSON_UNESCAPED_UNICODE);
} elseif ($action === 'resume') {
    $r = q_resume();
    echo json_encode(['ok' => true] + $r, JSON_UNESCAPED_UNICODE);
} elseif ($action === 'watchdog') {
    $r = q_watchdog();
    echo json_encode(['ok' => true] + $r, JSON_UNESCAPED_UNICODE);
} elseif ($action === 'dequeue') {                 // 從待寫隊列移除某本(已上線/誤加);?book=書名
    $r = q_dequeue($_GET['book'] ?? '');
    echo json_encode(['ok' => true] + $r, JSON_UNESCAPED_UNICODE);
} elseif ($action === 'status') {
    $s = q_status();
    echo json_encode([
        'ok' => true,
        'running' => $s['running'],
        'paused'  => $s['paused'],
        'current' => $s['current'] ? q_item_book($s['current']) : null,
        // 多槽可視化:目前在跑哪幾本、各跑在哪個帳號、啟用了哪些 lane
        'running_count' => $s['running_count'],
        'running_books' => $s['running_books'],
        'slots'   => array_map(function ($x) { return ['book' => q_item_book($x), 'lane' => ($x['lane'] ?? 'a')]; }, $s['slots']),
        'lanes'   => TG_LANES,
        'disabled_lanes' => $s['disabled_lanes'],   // 被斷路器自動停用的帳號(連敗達門檻)
        'lane_fail'      => $s['lane_fail'],         // 各帳號目前連續引擎失敗次數
        'pending' => count($s['queue']),
        'queue'   => q_book_list($s['queue']),
        // 主機端 cron 健康度:cron_last_run 應該每 5 分鐘更新一次;cron_sapi 應為 cli
        'cron_last_run' => $s['cron_last_run'] ?: null,
        'cron_ago_secs' => $s['cron_last_run'] ? (time() - $s['cron_last_run']) : null,
        'cron_sapi'     => $s['cron_sapi'] ?: null,
        'cron_note'     => $s['cron_note'] ?: null,
        // 主機自動 pull 部署健康度:deploy_ago_secs 應每 5 分更新、deploy_rc 應為 0
        'deploy_last_run' => $s['deploy_last_run'] ?: null,
        'deploy_ago_secs' => $s['deploy_last_run'] ? (time() - $s['deploy_last_run']) : null,
        'deploy_commit'   => $s['deploy_commit'] ?: null,
        'deploy_rc'       => isset($s['deploy_rc']) && $s['deploy_rc'] >= 0 ? $s['deploy_rc'] : null,
        'deploy_note'     => $s['deploy_note'] ?: null,
    ], JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'unknown action']);
}
