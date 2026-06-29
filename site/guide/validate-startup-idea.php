<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '如何驗證創業點子:別驗錯那一格,先確認有沒有人在痛｜痛點之尺',
  'desc'  => '驗證創業點子最貴的錯,是驗錯了東西——忙著驗「做不做得出來」,卻跳過「有沒有人痛到願意付錢」。用 P.A.I.N. 之尺把驗證排出順序:先找正在痛的真名、看他已為這個痛付過什麼、用最小的東西收第一筆錢,並避開「問你會不會買」這類假驗證。',
  'path'  => '/guide/validate-startup-idea',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · 驗證點子',
  'heading'   => '如何驗證創業點子',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/validate-startup-idea.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '與其再想一個禮拜,不如今天就量一遍',
    'body'    => '把你手上的點子放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘陪你跑一輪,告訴你最弱、最該先驗的是哪一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '如何驗證創業點子', 'path' => '/guide/validate-startup-idea'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
