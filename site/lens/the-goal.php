<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一整天都在動，東西卻出不來：用痛點之尺重讀《目標》｜痛點 P.A.I.N.',
  'desc'  => '你一整天都在動，會帶來下一筆收入的那件卻又往後挪。《目標》把這種瞎忙搬進工廠：產出由唯一那座瓶頸決定，其他每一站再努力都只是堆出賣不掉的半成品。用《痛點》世界觀拆 Goldratt 的瓶頸思維，找出你手上唯一真正卡住「有沒有人付錢」的那一格。',
  'path'  => '/lens/the-goal',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《目標》',
  'heading'   => '一整天都在動，東西卻出不來',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/the-goal.html',
  'book'      => ['name' => '目標：簡單而有效的常識管理', 'author' => 'Eliyahu M. Goldratt（高德拉特）、Jeff Cox'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在拚的那一格，真的是卡住你的那一格嗎？',
    'body'    => '《目標》教你在一條已經在跑的流程裡找出瓶頸；《痛點》這把尺，幫你先確認這條流程值不值得跑——有沒有人在痛、痛到願意付錢。現在就免費體檢一個點子，五分鐘看出你最弱、也最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '目標',     'path' => '/lens/the-goal'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
