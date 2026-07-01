<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '聚會會冷場，多半死在訂餐廳那一步：用痛點之尺重讀《這樣聚會，最成功！》｜痛點 P.A.I.N.',
  'desc'  => '普里亞・帕克逼你在訂場地、備食物之前，先回答一句話：這場聚會為誰、為什麼非辦不可。用痛點的眼光重讀：辦聚會跟做產品死在同一步——先蓋好流程與菜單，卻沒確認這一晚對這幾個人到底解了什麼。這禮拜，先把下一場聚會寫成一句話。',
  'path'  => '/lens/the-art-of-gathering',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《這樣聚會，最成功！》',
  'heading'   => '聚會會冷場，多半死在訂餐廳那一步',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-art-of-gathering.html',
  'book'      => ['name' => '這樣聚會，最成功！', 'author' => 'Priya Parker'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你辦聚會跟你驗一個點子，欠的是同一步',
    'body'    => '帕克逼你在訂餐廳之前，先想清楚這一晚為誰、為什麼；痛點這把尺要你在動手做之前，先確認門外真的有人在等。都是同一個很不浪漫的動作：先確認有人要，再開始忙。',
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
    ['name' => '這樣聚會，最成功！',  'path' => '/lens/the-art-of-gathering'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
