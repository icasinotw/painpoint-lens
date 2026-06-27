<?php
/**
 * site/api/tg-webhook.php
 * Telegram bot webhook → 把「書名(+作者)」排進隊列(批次排隊 + 斷路器 + 自動續跑)。
 * 一則訊息可含多本(每行一本)。只服務設定檔裡指定的 chat_id(山姆本人)。
 */
require_once __DIR__ . '/tg-queue-lib.php';

header('Content-Type: application/json; charset=utf-8');

// 1) 驗證來源是 Telegram(setWebhook 設的 secret_token,放在 header)
$got = $_SERVER['HTTP_X_TELEGRAM_BOT_API_SECRET_TOKEN'] ?? '';
if (!is_string($got) || $got === '' || !hash_equals($TG_WEBHOOK_SECRET, $got)) {
    http_response_code(403);
    echo json_encode(['ok' => false]);
    exit;
}

// 2) 讀 Telegram update
$update = json_decode(file_get_contents('php://input'), true);
$msg = $update['message'] ?? $update['edited_message'] ?? null;
if (!$msg) { echo json_encode(['ok' => true]); exit; }

$chatId = (string)($msg['chat']['id'] ?? '');
$text   = trim((string)($msg['text'] ?? ''));

// 3) 只聽主人
if ($chatId !== (string)$TG_ALLOWED_CHAT_ID) {
    tg_send($TG_BOT_TOKEN, $chatId, '抱歉,這隻 bot 只服務主人。');
    echo json_encode(['ok' => true]); exit;
}

// 4) 指令
$cmd = strtolower($text);
if ($cmd === '/queue') {
    $s = q_status();
    $books = q_book_list($s['queue']);
    if ($s['paused']) {
        $line = "⏸️ 暫停中(疑似用量用完)。還有 " . count($books) . " 本等著,用量回來會自動續,或打 /resume 立刻試。";
    } elseif ($s['running']) {
        $now = $s['current'] ? "《" . q_item_book($s['current']) . "》" : "1 本";
        $line = "正在寫 {$now},後面排隊 " . count($books) . " 本。";
    } else {
        $line = "隊列是空的,沒有在跑。";
    }
    if (!empty($books)) $line .= "\n排隊中:" . implode('、', $books);
    tg_send($TG_BOT_TOKEN, $chatId, $line);
    echo json_encode(['ok' => true]); exit;
}
if ($cmd === '/pause') {
    $r = q_pause();
    if ($r['already']) {
        tg_send($TG_BOT_TOKEN, $chatId, "隊列本來就已經暫停中了(剩 {$r['pending']} 本等著)。要續跑打 /resume。");
    } else {
        $tail = $r['current'] ? "(正在寫的《{$r['current']}》會先寫完、正常上線,不會中斷)" : '';
        tg_send($TG_BOT_TOKEN, $chatId, "⏸️ 已暫停隊列{$tail}。剩下的 {$r['pending']} 本原封不動留著、不會再發 —— 額度回來後打 /resume 接著跑。");
    }
    echo json_encode(['ok' => true]); exit;
}
if ($cmd === '/resume') {
    $r = q_resume(true);   // 主人手動續跑:連「手動暫停」也一起解除
    if ($r['resumed']) {
        tg_send($TG_BOT_TOKEN, $chatId, "▶️ 續跑了!從《{$r['dispatched']}》開始,後面還有 {$r['pending']} 本。");
    } else {
        tg_send($TG_BOT_TOKEN, $chatId, "現在沒有暫停中的隊列(沒東西要續)。");
    }
    echo json_encode(['ok' => true]); exit;
}
if ($text === '' || $cmd === '/start') {
    tg_send($TG_BOT_TOKEN, $chatId,
        "嗨!傳書名給我就好,也可以「書名 + 作者」一起傳。\n\n一次丟很多本就一行一本貼進同一則訊息,例如:\n「OKR:做最重要的事」,作者:John Doerr\n「複利效應」,作者:Darren Hardy\n心流\n\n我會全部排進隊列、一本完整寫完(上線)才接下一本,各自寫完把連結貼回給你。\n用量用完會自動暫停、回來再自動續。\n\n想找新書?打「請推薦我10本經典商業書」(可改數量、可指定主題如「推薦5本行銷的書」),我會挑沒推過、且有繁體中文版的書貼回給你。\n\n指令:/queue 看隊列、/pause 暫停不再發、/resume 續跑。");
    echo json_encode(['ok' => true]); exit;
}

// 4.5) 推薦商業書(獨立於書評隊列:直接觸發 recommend-books 工作流,不排隊)
$rec = tg_parse_recommend($text);
if ($rec['is']) {
    $ok = q_dispatch_recommend($rec['count'], $rec['topic']);
    if ($ok) {
        $scope = $rec['topic'] !== '' ? "「{$rec['topic']}」相關的" : '經典';
        tg_send($TG_BOT_TOKEN, $chatId,
            "收到 👍 正在雲端幫你挑 {$rec['count']} 本沒推薦過的{$scope}商業書(都會確認有繁體中文版),約 1～3 分鐘挑好把清單貼回給你。");
    } else {
        tg_send($TG_BOT_TOKEN, $chatId, "想幫你挑書,但雲端觸發失敗了(GitHub dispatch 沒成功),等一下再試一次。");
    }
    echo json_encode(['ok' => true]); exit;
}

// 5) 一則訊息可含多本:每一行解析成一本「書名(+作者)」
$lines = preg_split('/\r\n|\r|\n/u', $text);
$items = [];
foreach ($lines as $line) {
    $line = trim($line);
    if ($line === '') continue;
    list($b, $a) = tg_parse_book($line);
    if ($b !== '') $items[] = ['book' => $b, 'author' => $a];
}
if (empty($items)) {
    tg_send($TG_BOT_TOKEN, $chatId, '我沒看懂書名,直接傳書名就好,例如:心流');
    echo json_encode(['ok' => true]); exit;
}

// 6) 全部入列(第一本若閒置且未暫停就立刻開跑,其餘排隊)
$firstStartedBook = null;
foreach ($items as $it) {
    $r = q_enqueue_and_maybe_start($it['book'], $it['author']);
    if ($r['started'] && $firstStartedBook === null) $firstStartedBook = $it['book'];
}
$s = q_status();
$pending = count($s['queue']);

if ($s['paused']) {
    tg_send($TG_BOT_TOKEN, $chatId,
        "收到 " . count($items) . " 本 📚 已加進隊列。\n不過目前隊列「暫停中」(疑似用量用完),共 {$pending} 本等著 —— 用量回來會自動續,或打 /resume 立刻試。");
} elseif (count($items) === 1) {
    $it = $items[0];
    $who = $it['author'] !== '' ? "《{$it['book']}》(作者:{$it['author']})" : "《{$it['book']}》";
    if ($firstStartedBook !== null) {
        $tail = $pending > 0 ? "(前面還有 {$pending} 本排隊)" : '';
        tg_send($TG_BOT_TOKEN, $chatId, "收到 {$who} 📚 開始在雲端寫了(Opus 4.8 Extra,約 10～30 分鐘){$tail}。寫完把 /lens 連結貼回給你。");
    } else {
        tg_send($TG_BOT_TOKEN, $chatId, "收到 {$who} 📚 已排進隊列(前面還有 {$pending} 本)。前面跑完會自動接著寫,寫完貼連結回來。");
    }
} else {
    $now = $firstStartedBook ?? q_item_book($s['current'] ?? ($s['queue'][0] ?? ''));
    tg_send($TG_BOT_TOKEN, $chatId,
        "收到 " . count($items) . " 本 📚\n正在寫《{$now}》,其餘 {$pending} 本排隊中。會一本完整寫完(上線)才接下一本,各自寫完把連結貼回給你。\n/queue 看進度。");
}
echo json_encode(['ok' => true]);
