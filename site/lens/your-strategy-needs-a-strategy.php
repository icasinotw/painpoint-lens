<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '再聰明的策略診斷，也擋不住人手癢先做了再說：用痛點之尺重讀《策略選擇》｜痛點 P.A.I.N.',
  'desc'  => '瑞夫斯三人把策略攤成一張調色盤：先量環境算不算得準、動不動得了、嚴不嚴峻，再決定該大、該快、該搶先還是當平台，別拿同一套打法硬套所有局面。用痛點之尺補上它沒放進表裡的那一格——你那個點子，到底有沒有真人正為它痛、肯掏第一塊錢。',
  'path'  => '/lens/your-strategy-needs-a-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《策略選擇》',
  'heading'   => '再聰明的策略診斷，也擋不住人手癢先做了再說',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/your-strategy-needs-a-strategy.html',
  'book'      => ['name' => '策略選擇', 'author' => '馬丁・瑞夫斯（Martin Reeves）、納特・漢拿斯（Knut Haanaes）、詹美賈亞・辛哈（Janmejaya Sinha）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那張調色盤底下，地基還在嗎？',
    'body'    => '《策略選擇》教你讀環境、選打法；選之前，得先確認最小的那一格——到底有沒有人要。花五分鐘，用 P.A.I.N. 體檢一個你正在想的點子，看那塊地基立不立得起來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '策略選擇', 'path' => '/lens/your-strategy-needs-a-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
