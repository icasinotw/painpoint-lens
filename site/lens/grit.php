<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最貴的失敗，是你撐了三年的那種：用痛點之尺拆《恆毅力》｜痛點 P.A.I.N.',
  'desc'  => '《恆毅力》教你永不放棄、撐得比誰都久——但大部分沒人要的點子，本來是靠創業者「自己做不下去」便宜善終的。恆毅力剛好把這道免費煞車拆了：對的事撐得久，錯的事也撐到最貴才停。用痛點的眼光重讀，動手撐之前，先確認外面真的有人在等。',
  'path'  => '/lens/grit',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《恆毅力》',
  'heading'   => '最貴的失敗，是你撐了三年的那種',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/grit.html',
  'book'      => ['name' => '恆毅力（Grit）', 'author' => 'Angela Duckworth 安琪拉・達克沃斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '練撐得久之前，先確認那件事值得撐',
    'body'    => '《恆毅力》讓你相信努力會複利，卻不負責替你看路。《痛點》這把尺，幫你在把整身力氣押下去之前，先驗清楚外面有沒有人在等。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '恆毅力',      'path' => '/lens/grit'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
