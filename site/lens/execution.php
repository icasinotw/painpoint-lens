<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把錯的點子，執行得無懈可擊：用痛點之尺重讀《執行力》｜痛點 P.A.I.N.',
  'desc'  => '《執行力》是把計畫變成「做到了」最強的一台機器——逼出真話、追蹤到底。但執行力是放大器：你對準什麼它就放大什麼。用痛點的眼光重讀，先確認那頭有沒有人要，再發動這台昂貴的引擎。',
  'path'  => '/lens/execution',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《執行力》',
  'heading'   => '把錯的點子，執行得無懈可擊',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/execution.html',
  'book'      => ['name' => '執行力：沒有執行力，哪有競爭力', 'author' => 'Larry Bossidy 包熙迪、Ram Charan 夏藍'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你要執行的那個點子，那頭到底有沒有人？',
    'body'    => '《執行力》幫你把決定漂亮地做出來；《痛點》這把尺，幫你在發動引擎之前先問一句——那頭到底有沒有人在痛、有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '執行力',    'path' => '/lens/execution'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
