<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '收到第一塊錢以前，你那個點子還只是個願望：用痛點之尺重讀《一個週末！打造千萬事業》｜痛點 P.A.I.N.',
  'desc'  => '凱根《一個週末！打造千萬事業》逼你週末就去收到第一塊錢。用痛點之尺一格一格量：開口要錢才是真正的關卡，凱根只認「有人真的付了錢」這種驗證，但第一塊錢到「千萬」之間那條路，書裡沒附地圖。',
  'path'  => '/lens/million-dollar-weekend',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一個週末！打造千萬事業》',
  'heading'   => '收到第一塊錢以前，你那個點子還只是個願望',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/million-dollar-weekend.html',
  'book'      => ['name' => '一個週末！打造千萬事業', 'author' => '諾亞・凱根（Noah Kagan）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '動手之前，先量一下你那個點子有沒有人要付錢',
    'body'    => '凱根逼你週末就去收第一塊錢；收之前，先用痛點之尺把這個點子量一遍——誰在痛、痛到願不願意掏錢。',
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
    ['name' => '一個週末！打造千萬事業', 'path' => '/lens/million-dollar-weekend'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
