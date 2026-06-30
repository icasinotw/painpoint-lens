<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '會讓你興奮的點子，通常就是那檔最貴的基金｜痛點 P.A.I.N.',
  'desc'  => '哈藍靠一份「死薪水」滾出千萬，靠的是拒絕為「聽起來很厲害」的理財商品多付一毛錢。用痛點之尺重讀《我用死薪水輕鬆理財賺千萬》：你那個越想越興奮的點子，多半就是那檔讓你心跳加速、卻最貴的基金——把代價換算成能心算的數字，再決定要不要押下去。',
  'path'  => '/lens/millionaire-teacher',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《我用死薪水輕鬆理財賺千萬》',
  'heading'   => '會讓你興奮的點子，通常就是那檔最貴的基金',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/millionaire-teacher.html',
  'book'      => ['name' => '我用死薪水輕鬆理財賺千萬', 'author' => '安德魯・哈藍'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正握著一個讓你睡不著的點子？',
    'body'    => '哈藍逼投資人把「一點點費用」乘上三十年的複利、算到看清楚為止；你那個點子，現在就花五分鐘把代價算一遍，看它到底是實績還是只有故事。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                          'path' => '/'],
    ['name' => '痛點之尺',                       'path' => '/lens'],
    ['name' => '我用死薪水輕鬆理財賺千萬',          'path' => '/lens/millionaire-teacher'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
