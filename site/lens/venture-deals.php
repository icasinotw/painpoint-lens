<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那張條款清單，每一條都在替投資人擋一個痛：用痛點之尺重讀《創業投資聖經》｜痛點 P.A.I.N.',
  'desc'  => '費爾德和孟德森兩個創投，把一份投資條件書一行一行翻成白話，告訴你每個條款在搬走你的什麼。用痛點的眼光重讀《創業投資聖經》：那張清單其實是一張地圖，每一條都對應投資人自己的一個痛。募資的第一課，是先搞懂坐在你對面的人在怕什麼。',
  'path'  => '/lens/venture-deals',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《創業投資聖經》',
  'heading'   => '那張條款清單，每一條都在替投資人擋一個痛',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/venture-deals.html',
  'book'      => ['name' => '創業投資聖經', 'author' => 'Brad Feld（布萊德・費爾德）、Jason Mendelson（傑生・孟德森）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '見創投募資之前，先確認最根本的一件事',
    'body'    => '《創業投資聖經》教你讀懂條款清單；但坐到談判桌前，你更該先回頭驗一件事——你的點子，到底有沒有人要。花五分鐘免費體檢，找出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '創業投資聖經',     'path' => '/lens/venture-deals'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
