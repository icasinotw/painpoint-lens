<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '上任先看懂局，別急著做自己最拿手的事：用痛點之尺重讀《從新主管到頂尖主管》｜痛點 P.A.I.N.',
  'desc'  => '《從新主管到頂尖主管》要新主管上任先看懂局、別急著回去做自己最拿手的事。用痛點之尺重讀：抱著點子的你也是新主管，最會的是把東西做出來，於是埋頭開做，跳過唯一該先驗的——外面到底有沒有人在痛。',
  'path'  => '/lens/the-first-90-days',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《從新主管到頂尖主管》',
  'heading'   => '沃金斯要新主管先看懂局，你卻對著沒人要的點子埋頭做了一年',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-first-90-days.html',
  'book'      => ['name' => '從新主管到頂尖主管（The First 90 Days）', 'author' => 'Michael Watkins 麥可・沃金斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，做過上任診斷了嗎？',
    'body'    => '《從新主管到頂尖主管》教你上任先看懂局；《痛點》這把尺，幫你把同一道診斷用回自己的點子。現在就免費體檢一個點子，五分鐘看出「有沒有人真的要」這一軸有多弱；或翻翻《痛點》電子書。',
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
    ['name' => '從新主管到頂尖主管', 'path' => '/lens/the-first-90-days'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
