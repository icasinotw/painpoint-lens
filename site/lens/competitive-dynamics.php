<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '對手的反擊你都算過了，那桌客人到底存不存在：用痛點之尺重讀《動態競爭》｜痛點 P.A.I.N.',
  'desc'  => '陳明哲《動態競爭》把「競爭」縮小成「那一個對手」：他會不會發現你、有沒有動機還手、有沒有能力還手，三問就預測對手的下一拳。用痛點之尺重讀：這三問拿來問對手很準，拿來問客人更要命——你忙著算贏對手，先確認過你們搶的那桌客人真的存在嗎？',
  'path'  => '/lens/competitive-dynamics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《動態競爭》',
  'heading'   => '對手的反擊你都算過了，那桌客人到底存不存在',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/competitive-dynamics.html',
  'book'      => ['name' => '動態競爭', 'author' => '陳明哲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你忙著算贏對手，那桌客人真的存在嗎？',
    'body'    => '挑你現在最在意的那一個對手，寫下名字，答三題：他多久發現你、有沒有理由還手、有沒有本事還手。再把同樣三題，拿去問一個你叫得出名字的真實客人——他覺察得到自己的痛嗎、有沒有動機現在就付錢、付不付得起你的價。哪一張清單讓你心虛，先補哪一張。',
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
    ['name' => '動態競爭',  'path' => '/lens/competitive-dynamics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
