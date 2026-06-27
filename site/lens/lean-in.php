<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '挺身而進之前，先確認桌子對面有人：用痛點之尺重讀《挺身而進》｜痛點 P.A.I.N.',
  'desc'  => '《挺身而進》教你別讓內心的自我懷疑攔住你，舉手、坐到桌邊、去爭。但創業者借來這股勇氣，撲向的是一個還沒人確認要的東西。用痛點之尺補上桌子對面那一格：先確認有人要，再挺身而進。',
  'path'  => '/lens/lean-in',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《挺身而進》',
  'heading'   => '你挺身要爭的那張桌子，對面得先坐著一個人',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/lean-in.html',
  'book'      => ['name' => '挺身而進', 'author' => 'Sheryl Sandberg 雪柔・桑德伯格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你要撲上去的那張桌子，對面坐不坐人？',
    'body'    => '《挺身而進》給你坐到桌邊的勇氣；《痛點》這把尺，幫你先確認對面有沒有人。現在就免費體檢一個點子，五分鐘看出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '挺身而進',  'path' => '/lens/lean-in'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
