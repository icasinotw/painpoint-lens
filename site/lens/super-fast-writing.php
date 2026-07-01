<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你寫得慢，是因為每次都想從零開始：用痛點之尺重讀《超速寫作》｜痛點 P.A.I.N.',
  'desc'  => '呂白把超速寫作拆成可複製的手藝——拆爆款、建素材庫、套框架，讓動筆不必從零開始。用痛點的眼光重讀：你寫得慢，多半不是沒才華，是把「原創」當信仰、每次對著白紙硬想。但超速解得了「生不出來」，解不了「這篇有沒有人要」——一天寫十篇沒人要的，還是十篇沒人要。這禮拜，先開一個檔，幫自己備三塊料。',
  'path'  => '/lens/super-fast-writing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《超速寫作》',
  'heading'   => '你寫得慢，是因為每次都想從零開始',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/super-fast-writing.html',
  'book'      => ['name' => '超速寫作', 'author' => '呂白'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你寫得快，跟你那個點子站不站得住，欠的是同一步',
    'body'    => '呂白讓你動筆不必從零開始，把產出的速度拉起來；痛點這把尺要你在按下發布之前，先確認門外真的有人，在等你這件事——不然你只是更快地產出更多沒人要的東西。',
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
    ['name' => '超速寫作',  'path' => '/lens/super-fast-writing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
