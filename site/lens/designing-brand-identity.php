<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '品牌是擴音器，先確認麥克風前面有人：用痛點之尺重讀《脫穎而出的品牌致勝祕密2》｜痛點 P.A.I.N.',
  'desc'  => '《脫穎而出的品牌致勝祕密2》把做品牌拆成研究、釐清策略、設計識別、建立接觸點、管理資產五個階段，完整得像生產線。用痛點的眼光重讀：它是一台調到完美的擴音器，卻沒讓你先確認麥克風前面有沒有人——先有值得放大的聲音，再來放大。',
  'path'  => '/lens/designing-brand-identity',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《脫穎而出的品牌致勝祕密2》',
  'heading'   => '品牌是擴音器，先確認麥克風前面有人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/designing-brand-identity.html',
  'book'      => ['name' => '脫穎而出的品牌致勝祕密2', 'author' => 'Alina Wheeler（艾莉娜・惠勒）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那套品牌，放大的是什麼聲音？',
    'body'    => '惠勒教你把品牌的每個接觸點調成同一個音色；在你把擴音器開到最大之前，先確認麥克風前面站著一個願意掏錢的人。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                         'path' => '/'],
    ['name' => '痛點之尺',                      'path' => '/lens'],
    ['name' => '脫穎而出的品牌致勝祕密2',         'path' => '/lens/designing-brand-identity'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
