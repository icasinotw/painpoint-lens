<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '霍夫曼放你去衝之前，先設了一道你最愛跳過的門：用痛點之尺重讀《閃電擴張》｜痛點 P.A.I.N.',
  'desc'  => '《閃電擴張》名聲是一本叫你「踩到底」的書，但霍夫曼開頭先列出「什麼時候千萬別閃電擴張」——你的東西得先有人要。用痛點的眼光重讀：他自己排第一的成長殺手就是「沒人要」，多數讀者卻直接從這道門上頭翻過去。',
  'path'  => '/lens/blitzscaling',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《閃電擴張》',
  'heading'   => '霍夫曼放你去衝之前，先設了一道你最愛跳過的門',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/blitzscaling.html',
  'book'      => ['name' => '閃電擴張（Blitzscaling）', 'author' => 'Reid Hoffman 雷德・霍夫曼、Chris Yeh 克里斯・葉'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你想閃電擴張的那個東西，外面真的有人要嗎？',
    'body'    => '《閃電擴張》教你站進門內之後，怎麼衝得比對手快；《痛點》這把尺，幫你先確認自己有沒有資格進那道門。現在就免費體檢一個點子，五分鐘看「有沒有人要」那一格站不站得住；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '閃電擴張',   'path' => '/lens/blitzscaling'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
