<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最不敢打開的那本帳，通常最要命：用痛點之尺重讀《大查帳》｜痛點 P.A.I.N.',
  'desc'  => '《大查帳》作者索爾翻了七百年歷史，發現強權垮掉前都有同一步：帳愈難看，愈不敢再看——路易十四就這樣丟下柯爾貝的金邊帳冊、賠上王朝。用痛點的眼光重讀：你手上那個一直繞著走的數字，八成就是你的版本；痛是算得出來的代價，難的是敢不敢算。附一個這禮拜就能做的對帳動作。',
  'path'  => '/lens/the-reckoning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《大查帳》',
  'heading'   => '你最不敢打開的那本帳，通常最要命',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-reckoning.html',
  'book'      => ['name' => '大查帳：會計師如何打造與摧毀現代世界', 'author' => '雅各・索爾（Jacob Soll）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你心裡有沒有一個一直不敢算的數字？',
    'body'    => '《大查帳》用七百年的興衰，證明了存亡常常就看一件事：願不願意低頭，把那個難看的數字看完。你手上那本帳，今晚就能翻開。',
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
    ['name' => '大查帳',    'path' => '/lens/the-reckoning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
