<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '捨不得你的人夠不夠四成，這題你問得太晚：用痛點之尺重讀《成長駭客攻略》｜痛點 P.A.I.N.',
  'desc'  => '西恩・艾利斯《成長駭客攻略》最值錢的，是那道「四成的人非常失望」才准你談成長的驗證關。用痛點之尺重讀：這把尺準歸準，卻只量得到已經在用你產品的人，太晚；把同一個問題往前搬到動工之前，先看外面有沒有人正用彆腳的土法子硬撐這個痛。',
  'path'  => '/lens/hacking-growth',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《成長駭客攻略》',
  'heading'   => '捨不得你的人夠不夠四成，這題你問得太晚',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/hacking-growth.html',
  'book'      => ['name' => '成長駭客攻略：數位行銷教父教你打造高速成長團隊', 'author' => 'Sean Ellis 西恩・艾利斯、Morgan Brown 摩根・布朗'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，現在有人正為它將就著過嗎？',
    'body'    => '艾利斯要你等產品做出來，才量得到「有沒有人非常失望」；痛點這把尺，幫你在動工之前就先看一眼——外面到底有沒有人，正用著彆腳的土法子硬撐這個痛。花五分鐘，把你的點子跑一遍。',
    'primary' => ['url' => '/tool', 'label' => '免費跑一次痛點體檢'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '成長駭客攻略',     'path' => '/lens/hacking-growth'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
