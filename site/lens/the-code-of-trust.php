<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你越急著證明自己，對方越不信你：用痛點之尺重讀《如何讓人信任你》｜痛點 P.A.I.N.',
  'desc'  => '前FBI反情報主管羅賓·德瑞克靠贏得信任策反間諜，他教的第一步不是攻心，是克制自我、先閉嘴聽懂對方要什麼。用痛點的眼光重讀：這其實是對「人」做一次需求驗證——你急著推銷自己，跟創業者沒驗需求就埋頭做產品，是同一個錯。',
  'path'  => '/lens/the-code-of-trust',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《如何讓人信任你》',
  'heading'   => '你越急著證明自己，對方越不信你',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/the-code-of-trust.html',
  'book'      => ['name' => '如何讓人信任你', 'author' => '羅賓·德瑞克（Robin Dreeke）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把下一場對話，當成一次需求訪談',
    'body'    => '別再急著證明自己。挑一個你手上正在猶豫的點子或決定，先照痛點那套把它攤開，看看你到底在替誰解一個真的在痛的問題。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '如何讓人信任你',         'path' => '/lens/the-code-of-trust'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
