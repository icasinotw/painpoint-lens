<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '同一口可樂，貼上商標就變好喝了｜痛點 P.A.I.N.',
  'desc'  => '《行銷前必修的購物心理學》用可口可樂對百事的盲測證明：感知價值光靠外在訊號就撥得動。用痛點之尺補上巴登的撥盤讀不到的那一格——在你還沒佈下任何框架之前，外面是不是真有人為這個問題自己掏過錢。',
  'path'  => '/lens/decoded',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《行銷前必修的購物心理學》',
  'heading'   => '同一口可樂，貼上商標就變好喝了',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/decoded.html',
  'book'      => ['name' => '行銷前必修的購物心理學', 'author' => 'Phil Barden 菲爾・巴登'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '框架撥得動「感知價值」，撥不動「他本來就缺不缺」',
    'body'    => '巴登教你把顧客掏錢那一刻的帳算到對你有利；《痛點》這把尺，幫你先確認那筆帳本來就欠著你——在你還沒佈下任何訊號之前，外面已經有人為這個問題自己掏過錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '行銷前必修的購物心理學', 'path' => '/lens/decoded'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
