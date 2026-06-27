<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你對著一個沒人要的點子，做了兩年的刻意練習：用痛點之尺重讀《刻意練習》｜痛點 P.A.I.N.',
  'desc'  => '艾瑞克森說，讓人變強的不是時數，是練習裡有沒有誠實的外部回饋。用痛點的眼光重讀《刻意練習》——埋頭兩年改產品、練簡報的創業者，做的全是「天真的練習」；唯一算數的回饋，是一個真人肯不肯為你的點子掏錢。',
  'path'  => '/lens/peak',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《刻意練習》',
  'heading'   => '你對著一個沒人要的點子，做了兩年的刻意練習',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/peak.html',
  'book'      => ['name' => '刻意練習：原來那些天才，跟你我並沒有不同', 'author' => 'Anders Ericsson 安德斯・艾瑞克森、Robert Pool 羅伯特・普爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是真回饋撐著，還是一屋子的「聽起來不錯」？',
    'body'    => '艾瑞克森說，沒有誠實回饋的練習，只是把錯誤練得更熟；《痛點》這把尺，幫你把客套換成證據。現在就免費體檢一個點子，五分鐘找出你最弱、最該先補的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '刻意練習',    'path' => '/lens/peak'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
