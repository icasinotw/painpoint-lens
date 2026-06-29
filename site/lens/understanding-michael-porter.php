<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '做到最好，是一場大家一起輸的比賽：用痛點之尺重讀《簡單讀懂麥可·波特》｜痛點 P.A.I.N.',
  'desc'  => '瓊·瑪格瑞塔把波特一生的策略思想濃縮成一句忠告：別追求做到最好，要做到獨一無二，而獨一無二靠的是取捨。用痛點的眼光補上它預設你早填好的那一格——你想解的需求，外面真的有人在痛嗎？',
  'path'  => '/lens/understanding-michael-porter',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《簡單讀懂麥可·波特》',
  'heading'   => '做到最好，是一場大家一起輸的比賽',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/understanding-michael-porter.html',
  'book'      => ['name' => '簡單讀懂麥可·波特', 'author' => 'Joan Magretta 瓊·瑪格瑞塔'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你要做到「不一樣」的那件事，真的有人在痛嗎？',
    'body'    => '瑪格瑞塔教你把策略做得獨一無二；但動手之前，你得先確認那個需求外面真的有人在痛。現在就免費體檢一個點子，五分鐘找出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '簡單讀懂麥可·波特',     'path' => '/lens/understanding-michael-porter'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
