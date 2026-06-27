<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你逼每個人交出信任的憑證，唯獨放過了自己的點子：用痛點之尺重讀《高效信任力》｜痛點 P.A.I.N.',
  'desc'  => '《高效信任力》教你用「聰明信任」矩陣判斷該不該信一個人——又敢信、又先查清楚。把這張矩陣調轉一百八十度對準你自己的點子，會發現你對它滿格地信、卻零分地查，正坐在最容易被坑的那一格。',
  'path'  => '/lens/the-speed-of-trust',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《高效信任力》',
  'heading'   => '你逼每個人交出信任的憑證，唯獨放過了自己的點子',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-speed-of-trust.html',
  'book'      => ['name' => '高效信任力：達成目標的極速能量', 'author' => 'Stephen M.R. Covey 小史蒂芬・柯維'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你動手之前，先讓市場投一票',
    'body'    => '《高效信任力》教你別再盲目相信別人；《痛點》這把尺，幫你別再盲目相信自己的點子。五分鐘做一次線上體檢，當場看出你最沒人撐腰的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '高效信任力', 'path' => '/lens/the-speed-of-trust'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
