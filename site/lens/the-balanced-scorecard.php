<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那張替點子打的記分卡，高分全給了自己控制得了的欄位：用痛點之尺重讀《平衡計分卡》｜痛點 P.A.I.N.',
  'desc'  => '《平衡計分卡》要企業別只用財務數字（落後指標）管公司，改盯四個構面、找出能領先預告未來的指標。用痛點之尺重讀卡普朗與諾頓這本管理經典——你替那個點子打的記分卡，高分全堆在「我多努力、產品多好」這幾欄你自己控制得了的格子，唯獨「有沒有陌生人肯掏錢」那一欄，你用朋友的點頭填了進去。',
  'path'  => '/lens/the-balanced-scorecard',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《平衡計分卡》',
  'heading'   => '你的高分，全堆在自己控制得了的那兩欄',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-balanced-scorecard.html',
  'book'      => ['name' => '平衡計分卡：化策略為行動的績效管理工具(The Balanced Scorecard: Translating Strategy into Action)', 'author' => 'Robert Kaplan 羅伯・柯普朗、David Norton 大衛・諾頓'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你給那個點子打的分數，顧客那一欄是空的，還是你自己填的？',
    'body'    => '卡普朗要你別只看自己控制得了的數字；你那張記分卡上最該亮的那一格，是一個陌生人在真要掏錢時的決定，先讓那一欄，頭一次有個不是你給的分數。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '平衡計分卡',    'path' => '/lens/the-balanced-scorecard'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
