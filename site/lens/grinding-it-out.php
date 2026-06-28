<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一張八台奶昔機的訂單，逼克洛克去看了麥當勞：用痛點之尺重讀《永不放棄》｜痛點 P.A.I.N.',
  'desc'  => '《永不放棄》是麥當勞之父克洛克親述他五十二歲如何打造速食王國。用痛點之尺重讀：他敢押上身家，是因為那家小店一次打四十杯奶昔的訂單，早就替他驗完了需求；而你那個點子，連第一張訂單都還沒收到。',
  'path'  => '/lens/grinding-it-out',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《永不放棄》',
  'heading'   => '你那個點子，還沒人下過一張單',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/grinding-it-out.html',
  'book'      => ['name' => '永不放棄：我如何打造麥當勞王國', 'author' => '雷・克洛克（Ray Kroc）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，收到過第一張訂單了嗎？',
    'body'    => '克洛克敢賭，是因為那條隊早就替他算好了賠率。你那個點子，有沒有人真的為它掏過錢？免費體檢一下，五分鐘找出你最弱的那一軸。',
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
    ['name' => '永不放棄',    'path' => '/lens/grinding-it-out'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
