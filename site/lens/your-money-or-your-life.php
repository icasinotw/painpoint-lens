<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子，燒掉上千個鐘頭的命，換回了什麼？｜痛點 P.A.I.N.',
  'desc'  => '《跟錢好好相處》的魯賓教你把每筆花費換算成幾個鐘頭的命。用痛點之尺重讀：你那個點子早燒掉上千個鐘頭的人生，分母越疊越高，分子卻還是零——還沒有一個陌生人，因為真的需要它而掏過一次錢。這禮拜，先讓分子長出第一個數字。',
  'path'  => '/lens/your-money-or-your-life',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《跟錢好好相處》',
  'heading'   => '你那個點子燒掉上千個鐘頭，換回過什麼',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/your-money-or-your-life.html',
  'book'      => ['name' => '跟錢好好相處（Your Money or Your Life）', 'author' => 'Vicki Robin 薇琪・魯賓、Joe Dominguez 喬・杜明桂'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個你很篤定、卻還沒人付錢的點子？',
    'body'    => '你已經為它燒掉上千個鐘頭的命；在再投一個週末之前，先花幾分鐘，讓「有沒有陌生人肯掏錢」這一格，長出第一個不是你自己想像的數字。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '跟錢好好相處',        'path' => '/lens/your-money-or-your-life'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
