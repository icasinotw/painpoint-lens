<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那條狗怎麼跑都行，你該盯的是牽繩的人：用痛點之尺拆《一個投機者的告白》｜痛點 P.A.I.N.',
  'desc'  => '科斯托蘭尼《一個投機者的告白》把賠錢與賺錢的人，分成猶豫者和固執者——分界線是手上那個判斷自己驗來的、還是撿來的。用痛點的眼光重讀老狗理論：先把「會漲、會成」的念頭，從別人嘴裡撿來的，換成自己驗出來的。',
  'path'  => '/lens/the-art-of-thinking-about-money',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《一個投機者的告白》',
  'heading'   => '那條狗怎麼跑都行，你該盯的是牽繩的人',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-art-of-thinking-about-money.html',
  'book'      => ['name' => '一個投機者的告白（Die Kunst über Geld nachzudenken）', 'author' => 'André Kostolany 安德烈・科斯托蘭尼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「會成」的判斷，是自己驗的，還是撿來的？',
    'body'    => '科斯托蘭尼把賠錢的人和賺錢的人，分在「有沒有自己的判斷」這條線上；《痛點》這把尺，幫你把同一個動作用在點子上——先確認真的有人在痛、在掏錢，再把時間和錢押下去。現在就免費體檢一個點子，照出你那個判斷最該先補的一塊；或翻翻《痛點》電子書。',
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
    ['name' => '一個投機者的告白',      'path' => '/lens/the-art-of-thinking-about-money'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
