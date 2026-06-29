<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '十種創新，你只練了產品那一招：用痛點之尺重讀《創新的10個原點》｜痛點 P.A.I.N.',
  'desc'  => '基利和多布林數了上千個創新，歸成十種，證明多數人死磨的「產品表現」恰恰最好抄、回報最薄。用痛點之尺重讀《創新的10個原點》：這十種招式招招在教你怎麼把東西做出來、做得難抄，獨獨沒有一種，逼你先確認外面真有一個人，正為這件事痛到肯掏錢。',
  'path'  => '/lens/ten-types-of-innovation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創新的10個原點》',
  'heading'   => '十種創新，你只練了產品那一招',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/ten-types-of-innovation.html',
  'book'      => ['name' => '創新的10個原點', 'author' => 'Larry Keeley 賴瑞・基利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，十格裡只有產品那格亮著嗎？',
    'body'    => '基利教你把一個創新做得豐富、難被抄；但在推那十支推桿之前，先確認有人真的在痛——去問一個對你沒義務的陌生人，他現在怎麼解決這件事、上次為它花了多少錢。',
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
    ['name' => '創新的10個原點', 'path' => '/lens/ten-types-of-innovation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
