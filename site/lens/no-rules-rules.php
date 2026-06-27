<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最想抄的那份自由，網飛是擺在最後才發的：用痛點之尺拆《零規則》｜痛點 P.A.I.N.',
  'desc'  => '《零規則》裡網飛拆光休假、報帳、簽核規定，靠的是先堆出「人才密度」。用痛點的眼光重讀：你最想抄的那份創業自由——辭職做自己想做的東西——也排在一道工序後面，先確認外面真的有人要，再動手蓋。',
  'path'  => '/lens/no-rules-rules',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《零規則》',
  'heading'   => '你最想抄的那份自由，網飛是擺在最後才發的',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/no-rules-rules.html',
  'book'      => ['name' => '零規則：高人才密度 × 完全透明 × 最低管控的網飛經營哲學（No Rules Rules）', 'author' => 'Reed Hastings 里德・海斯汀、Erin Meyer 艾琳・梅爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個夢，確認過外面有人要了嗎？',
    'body'    => '《零規則》教網飛先讓對的人到齊、再給自由；《痛點》這把尺，幫你在動手蓋之前，先確認外面真的有人要。現在就免費體檢一個點子，五分鐘看出你最沒底、最該先驗的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '零規則',    'path' => '/lens/no-rules-rules'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
