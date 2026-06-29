<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '幸福沒有萬用解，得先驗哪招適合你：用痛點之尺重讀《這一生的幸福計劃》｜痛點 P.A.I.N.',
  'desc'  => '柳波莫斯基在《這一生的幸福計劃》算出那張著名的帳：快樂約五成天生、一成靠處境、四成握在你刻意的行動裡。但她最該被細讀的一步，是要你先測哪一招適合你、再投入。用痛點的眼光重讀：她其實在教你對「幸福」做需求驗證——別信別人的見證，先拿自己當實驗對象跑一輪。',
  'path'  => '/lens/the-how-of-happiness',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《這一生的幸福計劃》',
  'heading'   => '幸福沒有萬用解，得先驗哪招適合你',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-how-of-happiness.html',
  'book'      => ['name' => '這一生的幸福計劃', 'author' => 'Sonja Lyubomirsky（索妮亞・柳波莫斯基）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別人發誓有效的那一招，對你真的有效嗎？',
    'body'    => '這禮拜只挑一招當實驗，連做七天，每天記一筆「做完有沒有真的好過一點」——有感再留、沒感就換下一招，先驗證再投入力氣。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '這一生的幸福計劃',         'path' => '/lens/the-how-of-happiness'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
