<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《B2B銷售勝經》｜痛點 P.A.I.N.',
  'desc'  => '亞倫・羅斯用 Salesforce 的實戰，把業績從玄學拆成一條可預測的生產線。但那台機器只忠實放大你餵進去的東西——用痛點的眼光重讀《B2B銷售勝經》：蓋機器之前，先確認外面真的有人要那批貨。',
  'path'  => '/lens/predictable-revenue',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《B2B銷售勝經》',
  'heading'   => '把生意做成生產線之前，先確認有人要那批貨',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/predictable-revenue.html',
  'book'      => ['name' => 'B2B銷售勝經（Predictable Revenue）', 'author' => 'Aaron Ross 亞倫・羅斯、Marylou Tyler 瑪麗露・泰勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '蓋業績機器之前，先確認有人要那批貨',
    'body'    => '羅斯教你把業績拆成一條可預測的生產線；但機器只會忠實放大你餵進去的東西。用《痛點》這把尺，先替你打算大規模開發的那個點子做一次真人查核——確認有人真的痛到會付錢，再把它交給機器去放大。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => 'B2B銷售勝經',    'path' => '/lens/predictable-revenue'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
