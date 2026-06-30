<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「這次不一樣」一出口，就是該數數字的時候：用痛點之尺重讀《這次不一樣》｜痛點 P.A.I.N.',
  'desc'  => '萊茵哈特與羅格夫把八百年、六十六國的金融危機排成一張表，發現每場崩盤前夜，最聰明的人都說過同一句「這次不一樣」。用痛點之尺重讀：一個漂亮又人人都信的故事，最危險；對付故事最好用的東西，是一個你能心算的數字。',
  'path'  => '/lens/this-time-is-different',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《這次不一樣》',
  'heading'   => '「這次不一樣」一出口，就是該數數字的時候',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/this-time-is-different.html',
  'book'      => ['name' => '這次不一樣：800年金融危機史', 'author' => 'Carmen Reinhart 萊茵哈特、Kenneth Rogoff 羅格夫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個「這次不一樣」，禁得起被數一遍嗎？',
    'body'    => '挑一件你最近很有把握、理由正好是「我這情況跟別人不一樣」的事，把那幾個「不一樣」一條條寫下來，再問當年賠光的人是不是也說得出口。',
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
    ['name' => '這次不一樣', 'path' => '/lens/this-time-is-different'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
