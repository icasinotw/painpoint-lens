<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先確認有人在痛，再去研究怎麼贏對手：用痛點之尺重讀《競爭策略》｜痛點 P.A.I.N.',
  'desc'  => '波特《競爭策略》的五力分析教你看清一個產業好不好賺、該怎麼站位，卻假設市場早就存在。用 P.A.I.N. 四問補上它跳過的那一格：誰在痛、痛多深、為什麼是你、數字成不成立。',
  'path'  => '/lens/competitive-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《競爭策略》',
  'heading'   => '先確認有人在痛，再去研究怎麼贏過對手',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/competitive-strategy.html',
  'book'      => ['name' => '競爭策略', 'author' => 'Michael Porter 麥可·波特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的點子，戰場上真的有人在痛嗎？',
    'body'    => '《競爭策略》教你看清戰場、站對位置；但動手之前，你得先確認戰場上真的有人在痛。現在就免費體檢一個點子，五分鐘找出你最弱的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '競爭策略',  'path' => '/lens/competitive-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
