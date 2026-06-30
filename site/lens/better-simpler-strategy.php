<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先有人肯付錢，那根棒子才立得起來：用痛點之尺重讀《哈佛最熱門的價值策略課》｜痛點 P.A.I.N.',
  'desc'  => '奧伯霍澤－吉把策略收斂成一根「價值棒」，教你把上端（顧客願付價格）往上頂。但這招的前提，是上端早就大於零。用痛點之尺補上它沒問的那一格：你那個點子，有沒有人肯付第一塊錢，棒子立不立得起來。',
  'path'  => '/lens/better-simpler-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《哈佛最熱門的價值策略課》',
  'heading'   => '先有人肯付錢，那根棒子才立得起來',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/better-simpler-strategy.html',
  'book'      => ['name' => '哈佛最熱門的價值策略課', 'author' => '菲利克斯・奧伯霍澤－吉（Felix Oberholzer-Gee）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '上端到底在不在零以上？',
    'body'    => '《哈佛最熱門的價值策略課》教你把價值棒的上端往上頂；頂之前，得先確認上端真的大於零。花五分鐘，用 P.A.I.N. 體檢一個你正在想的點子，看那根棒子立不立得起來。',
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
    ['name' => '哈佛最熱門的價值策略課', 'path' => '/lens/better-simpler-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
