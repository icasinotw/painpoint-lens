<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你找到的是藍海，還是沒人要的空地？用痛點之尺重讀《藍海策略》｜痛點 P.A.I.N.',
  'desc'  => '《藍海策略》教你離開紅海、去開創沒人競爭的市場。但沒人競爭的地方，也可能是沒人要的空地。用 P.A.I.N. 四問補上它跳過的需求驗證：誰在痛、痛多深、為什麼是你、數字算不算得過來。',
  'path'  => '/lens/blue-ocean-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《藍海策略》',
  'heading'   => '你找到的是藍海，還是沒人要的空地？',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/blue-ocean-strategy.html',
  'book'      => ['name' => '藍海策略：開創無人競爭的全新市場', 'author' => 'W. Chan Kim、Renée Mauborgne'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你圈出的那片藍海，裡面到底有沒有人？',
    'body'    => '《藍海策略》教你游出紅海；《痛點》這把尺，幫你確認對岸有沒有人在等。現在就免費體檢一個點子，五分鐘找出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '藍海策略',  'path' => '/lens/blue-ocean-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
