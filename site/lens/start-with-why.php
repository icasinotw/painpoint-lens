<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '有一個動人的「為什麼」，不等於有人在痛：用痛點之尺重讀《先問，為什麼？》｜痛點 P.A.I.N.',
  'desc'  => '《先問，為什麼？》教你往內挖出動人的「為什麼」，卻跳過了往外驗的那一格。用 P.A.I.N. 補上它沒問的：誰在痛、痛多深——你的信念再動人，也不等於有人願意為它掏錢。',
  'path'  => '/lens/start-with-why',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《先問，為什麼？》',
  'heading'   => '有一個動人的「為什麼」，不等於有人在痛',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/start-with-why.html',
  'book'      => ['name' => '先問，為什麼？：啟動你的感召領導力', 'author' => 'Simon Sinek 賽門‧西奈克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「為什麼」，外面有人在痛嗎？',
    'body'    => '《先問，為什麼？》幫你挖出動人的為什麼；《痛點》這把尺，幫你驗證外面有沒有人在痛。現在就免費體檢一個點子，五分鐘戳出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '先問，為什麼？', 'path' => '/lens/start-with-why'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
