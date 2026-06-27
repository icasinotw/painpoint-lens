<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '瞎忙，是你在對自己做一個沒人要的產品：用痛點之尺重讀《杜拉克談高效能的5個習慣》｜痛點 P.A.I.N.',
  'desc'  => '《杜拉克談高效能的5個習慣》教你別把力氣花在沒人要的結果上。用《痛點》的眼光重讀它：高效能，其實就是對自己的工作做需求驗證——先確認有人在等，再動手。',
  'path'  => '/lens/the-effective-executive',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《杜拉克談高效能的5個習慣》',
  'heading'   => '瞎忙，是你在對自己做一個沒人要的產品',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/the-effective-executive.html',
  'book'      => ['name' => '杜拉克談高效能的5個習慣', 'author' => 'Peter Drucker 彼得・杜拉克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你每天的力氣，花在有人要的事上嗎？',
    'body'    => '《杜拉克談高效能的5個習慣》幫你把力氣對準組織要的結果；《痛點》這把尺，幫你往前再追一刀——這件事，外面到底有沒有人在痛、有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',                      'path' => '/'],
    ['name' => '痛點之尺',                   'path' => '/lens'],
    ['name' => '杜拉克談高效能的5個習慣',     'path' => '/lens/the-effective-executive'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
