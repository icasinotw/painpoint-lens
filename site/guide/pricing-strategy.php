<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '定價怎麼定?定的是價值,不是成本(三個定價的錨)｜痛點之尺',
  'desc'  => '多數人定價用「成本加一點」或「比對手便宜一點」,都漏了你解掉的痛值多少。教你用三個錨定價:他現在的爛方法花他多少、解決後他省下賺到多少、競品價位;以及怎麼用預售測出真正的價。',
  'path'  => '/guide/pricing-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · 定價',
  'heading'   => '定價怎麼定?',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/pricing-strategy.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '定價之前,先確認那個痛真的夠深',
    'body'    => '價值定價的前提,是痛夠深、有人肯付。把點子放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘看出那個痛撐不撐得起你想定的價。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/guide/business-model-design', 'label' => '商業模式怎麼設計'],
  'next'      => ['url' => '/guide/find-first-customers', 'label' => '冷啟動:怎麼找到第一批用戶'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '定價怎麼定', 'path' => '/guide/pricing-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
