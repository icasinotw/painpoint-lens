<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '伊貝拉要你做了才認識自己，你卻把那個點子在腦裡想了兩年，沒做給一個陌生人看：用痛點之尺重讀《破框能力》｜痛點 P.A.I.N.',
  'desc'  => '《破框能力》是伊貝拉的領導經典，核心是「由外而內」：你不是想清楚才行動，是先行動，那個領導身分才長出來。用痛點之尺重讀：你那句「一定有人要」，正是她整本書警告你別做的純內省——從沒往外碰過一個真人；唯一能驗它的，是一個會掏錢的陌生人。',
  'path'  => '/lens/act-like-a-leader-think-like-a-leader',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《破框能力》',
  'heading'   => '那個點子你想了兩年，沒做給一個陌生人看',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/act-like-a-leader-think-like-a-leader.html',
  'book'      => ['name' => '破框能力', 'author' => '艾米妮亞・伊貝拉（Herminia Ibarra）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，外面有人要嗎？',
    'body'    => '《破框能力》教你做了才認識自己；同一個動作，用《痛點》這把尺對著你的點子做一次——別在腦裡想它有沒有人要，去外面問一個會掏錢的陌生人。免費體檢一個點子，五分鐘看出你最弱的那一軸。',
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
    ['name' => '破框能力',   'path' => '/lens/act-like-a-leader-think-like-a-leader'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
