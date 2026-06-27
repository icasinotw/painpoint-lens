<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《鳳凰專案》：你正在蓋一座沒人確認要不要的鳳凰專案｜痛點 P.A.I.N.',
  'desc'  => '《鳳凰專案》把一場 IT 火場寫成小說，全公司賭上一個遲交多年的大專案翻身。用痛點之尺重讀：那座讓所有人焦頭爛額的鳳凰專案，本身就是個沒人先確認有人要、就大舉動工的東西——而你正一個人，蓋著小一號的同一座船。',
  'path'  => '/lens/the-phoenix-project',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《鳳凰專案》',
  'heading'   => '你正在替自己的點子，蓋一座沒人確認要不要的鳳凰專案',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-phoenix-project.html',
  'book'      => ['name' => '鳳凰專案（The Phoenix Project）', 'author' => 'Gene Kim 金恩（與 Kevin Behr、George Spafford 合著）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個越滾越大的點子，有沒有人在港口邊等著上船？',
    'body'    => '《鳳凰專案》教你找出工廠裡真正卡住全局的瓶頸。花五分鐘，看看你那個點子最沒被驗過的，是不是「有沒有人要」這一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '鳳凰專案',   'path' => '/lens/the-phoenix-project'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
