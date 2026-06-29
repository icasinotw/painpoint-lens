<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '讓陌生人替你的點子，賭上一點東西：用痛點之尺重讀《爆賣產品這樣來！》｜痛點 P.A.I.N.',
  'desc'  => '薩沃亞《爆賣產品這樣來！》教你在動工前，用「預型」這種便宜的假東西先驗證需求。用痛點的眼光重讀：別只聽人嘴上說「會買」，要看他肯不肯先賭上一點真東西；而它只把你送到「有人要」，賺不賺錢那一格，得你自己補上。',
  'path'  => '/lens/the-right-it',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《爆賣產品這樣來！》',
  'heading'   => '讓陌生人替你的點子，賭上一點東西',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-right-it.html',
  'book'      => ['name' => '爆賣產品這樣來！', 'author' => 'Alberto Savoia 阿爾伯特・薩沃亞'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，有人肯為它掏錢嗎？',
    'body'    => '把你最想做的那個東西想一遍：除了朋友嘴上說讚，有沒有人願意先付一點訂金、留個真 email？要是還沒有，先別急著做，先想辦法把這個答案逼出來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',             'path' => '/'],
    ['name' => '痛點之尺',          'path' => '/lens'],
    ['name' => '爆賣產品這樣來！',   'path' => '/lens/the-right-it'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
