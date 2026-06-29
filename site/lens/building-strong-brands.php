<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '品牌是長線資產，先確認痛是真的：用痛點之尺重讀《品牌王道》｜痛點 P.A.I.N.',
  'desc'  => '大衛・艾克《品牌王道》把品牌講成一筆要花十年存的資產，教你把忠誠養成別人攻不進來的護城河。用 P.A.I.N. 補上他從不要你檢查的那一格：那層信任底下，真的壓著一個會讓人一再回來的痛嗎，還是你正拿艾克教的每一招，去替一個還沒確認大於零的數字做乘法？',
  'path'  => '/lens/building-strong-brands',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《品牌王道》',
  'heading'   => '品牌是長線資產，先確認痛是真的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/building-strong-brands.html',
  'book'      => ['name' => '品牌王道', 'author' => '大衛・艾克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正準備替品牌掏的那筆錢，底下真的有人會回來嗎？',
    'body'    => '艾克教你把忠誠養成護城河；養之前，先確認外面真的有一群會自己回頭的人。五分鐘體檢一個點子，看看你打算放大的那個數字，是不是已經大於零。',
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
    ['name' => '品牌王道',  'path' => '/lens/building-strong-brands'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
