<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒有人是來聽你把投影片念完的：用痛點之尺重讀《簡報禪》｜痛點 P.A.I.N.',
  'desc'  => '《簡報禪》用禪的減法教你做簡報：一張投影片只剩一件事，留白多到讓你不安。用 P.A.I.N. 的眼光重讀：一場簡報就是你出給觀眾的產品，先確認他要帶走什麼，再打開軟體。',
  'path'  => '/lens/presentation-zen',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《簡報禪》',
  'heading'   => '沒有人是來聽你把投影片念完的',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/presentation-zen.html',
  'book'      => ['name' => '簡報禪：教你如何說得精采，做得漂亮，想得清晰', 'author' => 'Garr Reynolds 蓋爾・雷諾茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title' => '把「做滿」的力氣，換成「確認有人要」',
    'body'  => '《簡報禪》教你把投影片刪到只剩一件事；《痛點》這把尺，教你先確認那一件事對台下的人真的成立。同一個動作，一個用在簡報，一個用在你手上的點子。',
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
    ['name' => '簡報禪',    'path' => '/lens/presentation-zen'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
