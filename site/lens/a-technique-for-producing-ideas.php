<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '點子可以照表生產，要不要卻不歸這台機器管：用痛點之尺重讀《創意，從無到有》｜痛點 P.A.I.N.',
  'desc'  => '《創意，從無到有》把「想出點子」拆成五個學得會的步驟，是一台近乎完美的點子製造機。用痛點的眼光重讀:這台機器是在你決定「做什麼、給誰」之後才開工的，它能把點子磨到發亮，卻從不過問外面到底有沒有人正排隊等著要。',
  'path'  => '/lens/a-technique-for-producing-ideas',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創意，從無到有》',
  'heading'   => '你把點子磨到無可挑剔，倉庫裡堆滿了沒人訂的好貨',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/a-technique-for-producing-ideas.html',
  'book'      => ['name' => '創意，從無到有（A Technique for Producing Ideas）', 'author' => 'James Webb Young（楊傑美）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那套生點子的功夫，有對準一張真訂單嗎？',
    'body'    => '《創意，從無到有》教你穩穩地生出好點子；《痛點》這把尺，幫你在動手之前先確認外面有沒有人正排隊等著要。現在就免費體檢一個點子，五分鐘照出你最心虛的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '創意，從無到有', 'path' => '/lens/a-technique-for-producing-ideas'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
