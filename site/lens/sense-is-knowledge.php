<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他做了熊本熊，卻說自己沒有天分：用痛點之尺重讀《品味，從知識開始》｜痛點 P.A.I.N.',
  'desc'  => '水野學做出熊本熊，卻在書裡把「天分」拆掉：品味不是天生才能，是知識堆出來的，而知識的地基是先把一個領域的「普通」摸到滾瓜爛熟。用痛點的眼光重讀：你那個點子的問題常常不是不夠特別，是你根本沒量過它要取代的「普通」長怎樣——先把市場的普通寫出來，你的「特別」才有座標。',
  'path'  => '/lens/sense-is-knowledge',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《品味，從知識開始》',
  'heading'   => '他做了熊本熊，卻說自己沒有天分',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/sense-is-knowledge.html',
  'book'      => ['name' => '品味，從知識開始（センスは知識からはじまる）', 'author' => '水野學 Manabu Mizuno'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你量過你那個點子要取代的「普通」嗎？',
    'body'    => '你以為自己在做一個特別的東西，可你連它要取代的那個「普通」都沒量過。現在沒有你，這群人靠什麼湊合？花多少錢、卡在哪？先把市場的普通量準，你的「特別」才有座標。',
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
    ['name' => '品味，從知識開始', 'path' => '/lens/sense-is-knowledge'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
