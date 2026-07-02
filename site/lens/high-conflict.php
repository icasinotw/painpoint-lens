<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《修復關係的正向衝突》｜痛點 P.A.I.N.',
  'desc'  => '亞曼達・瑞普利說，會把人吸進去出不來的「高衝突」，總有一條看不見的「暗流」——你檯面上在吵的，幾乎不是你真正在痛的。用痛點的眼光重讀：一場沒完沒了的架，多半是你對著一個假議題砸解法；她教的「循環傾聽」，其實是在對一場衝突做需求驗證。',
  'path'  => '/lens/high-conflict',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《修復關係的正向衝突》',
  'heading'   => '沒完沒了的衝突，多半是你們吵錯了題目',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/high-conflict.html',
  'book'      => ['name' => '修復關係的正向衝突（High Conflict）', 'author' => 'Amanda Ripley 亞曼達・瑞普利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你檯面上在吵的，常常不是真正卡著你的',
    'body'    => '一場沒完沒了的架，多半死守著檯面上那個議題，一輪一輪地贏，卻永遠收不掉——因為真正壓著你的那件事，還埋在底下沒被說出口。先把對方那句話重講一遍、問一句「我這樣懂，對嗎」，你往往會摸到一個很不一樣的題目。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '修復關係的正向衝突',   'path' => '/lens/high-conflict'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
