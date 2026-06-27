<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用一半的時間做兩倍的事，前提是有人要那件事：用痛點之尺重讀《SCRUM》｜痛點 P.A.I.N.',
  'desc'  => '薩瑟蘭在《SCRUM》裡拆穿甘特圖：一張排得越漂亮、離真實越遠的計畫。用痛點的眼光重讀——你那個還沒動手的點子，也是一張甘特圖；他的「衝刺」逼團隊每兩週驗一次現實，而你點子的第一個衝刺，是先確認有沒有人真的要。',
  'path'  => '/lens/scrum',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《SCRUM》',
  'heading'   => '用一半的時間做兩倍的事，前提是有人要那件事',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/scrum.html',
  'book'      => ['name' => 'SCRUM：用一半的時間做兩倍的事', 'author' => 'Jeff Sutherland 傑夫・薩瑟蘭、JJ Sutherland'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那張排得漂漂亮亮的點子計畫，有人驗過嗎？',
    'body'    => '薩瑟蘭說，計畫排得越細越美，離真實反而越遠；《痛點》這把尺，幫你在動手前先用一個小衝刺驗掉它。現在就免費體檢一個點子，五分鐘找出你最弱、最該先補的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => 'SCRUM',      'path' => '/lens/scrum'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
