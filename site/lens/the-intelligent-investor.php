<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子，連一張股票的安全邊際都沒有：用痛點之尺重讀《智慧型股票投資人》｜痛點 P.A.I.N.',
  'desc'  => '葛拉漢《智慧型股票投資人》教你買股票要留「安全邊際」——先承認自己會看走眼，再下注。用痛點的眼光重讀：你那個還沒驗的點子，卻一條退路都沒留。拿葛拉漢分投資與投機的三條尺，回頭量你準備重壓的那個賭注。',
  'path'  => '/lens/the-intelligent-investor',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《智慧型股票投資人》',
  'heading'   => '你那個點子，連一張股票的安全邊際都沒有',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-intelligent-investor.html',
  'book'      => ['name' => '智慧型股票投資人', 'author' => 'Benjamin Graham 班傑明・葛拉漢'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，留了多少條「賠得起」的退路？',
    'body'    => '葛拉漢買股票前一定先留一條安全邊際；《痛點》這把尺，幫你在押上積蓄之前，先確認有沒有人真的要。現在就免費體檢一個點子，五分鐘找出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '智慧型股票投資人', 'path' => '/lens/the-intelligent-investor'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
