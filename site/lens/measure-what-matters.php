<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你替每個關鍵結果都寫了數字，就差最前面那一個：用痛點之尺拆《OKR：做最重要的事》｜痛點 P.A.I.N.',
  'desc'  => '杜爾的 OKR 逼你把目標拆成可驗證的關鍵結果、又快又齊地達成，卻從不問你那個方向有沒有人要。用痛點的眼光重讀《OKR：做最重要的事》：替你的目標補上最該寫、也最常漏的那個關鍵結果——外面到底有沒有人，會為這件事掏錢。',
  'path'  => '/lens/measure-what-matters',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《OKR：做最重要的事》',
  'heading'   => '你替每個關鍵結果都寫了數字，就差最前面那一個',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/measure-what-matters.html',
  'book'      => ['name' => 'OKR：做最重要的事（Measure What Matters）', 'author' => 'John Doerr 約翰・杜爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個目標，底下站不站得住？',
    'body'    => 'OKR 幫你把目標追到底；《痛點》這把尺，幫你先確認那個目標真的有人要。現在就免費體檢一個點子，五分鐘看出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => 'OKR：做最重要的事',    'path' => '/lens/measure-what-matters'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
