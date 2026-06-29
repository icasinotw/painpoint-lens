<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '贏家通吃之前，得先有人走進來：用痛點之尺重讀《平台策略》｜痛點 P.A.I.N.',
  'desc'  => '《平台策略》解剖了幾十家倒掉的平台，教你破解「先有雞還是先有蛋」。用痛點的眼光重讀：那道雞生蛋的難題，其實是需求驗證換了件華麗外套——在你花兩年蓋雙邊機器之前，先證明哪怕一邊、哪怕一個真人，餓到願意第一個推門進來。',
  'path'  => '/lens/the-business-of-platforms',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《平台策略》',
  'heading'   => '贏家通吃之前，得先有人走進來',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-business-of-platforms.html',
  'book'      => ['name' => '平台策略', 'author' => 'Michael A. Cusumano（麥可・庫蘇馬諾）、Annabelle Gawer（安娜貝爾・蓋威爾）、David B. Yoffie（大衛・尤菲）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個平台，門外有人嗎？',
    'body'    => '《平台策略》教你怎麼經營一座已經有人潮的市集；痛點這把尺，幫你先驗門外那第一個人在不在。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '平台策略',  'path' => '/lens/the-business-of-platforms'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
