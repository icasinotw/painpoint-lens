<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '西蒙把顧客肯付的價格量到分毫不差，你那個點子，還沒有一個陌生人肯為它付過第一塊錢：用痛點之尺重讀《精準訂價》｜痛點 P.A.I.N.',
  'desc'  => '《精準訂價》是全球頂尖訂價專家西蒙的代表作，核心是「顧客願意付的價格，就是價值的真相」。用痛點之尺重讀：他把這個數字量到分毫不差，前提是已經有人肯買；而你那個點子，連一個陌生人肯為它付第一塊錢都還沒發生，卻已在糾結該訂九十九還是一百九。',
  'path'  => '/lens/confessions-of-the-pricing-man',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精準訂價》',
  'heading'   => '還沒一個陌生人，為它付過第一塊錢',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/confessions-of-the-pricing-man.html',
  'book'      => ['name' => '精準訂價', 'author' => '赫曼・西蒙（Hermann Simon）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，有人肯付的價格還是零',
    'body'    => '《精準訂價》教你把價格量到分毫不差；先用《痛點》這把尺，確認那個價格大不大於零。免費體檢一個點子，五分鐘看出你最弱的那一軸。',
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
    ['name' => '精準訂價',   'path' => '/lens/confessions-of-the-pricing-man'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
