<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一座完美的工廠，照樣能量產沒人要的東西：用痛點之尺重讀《領導者的數位轉型》｜痛點 P.A.I.N.',
  'desc'  => '《領導者的數位轉型》把「AI 原生公司為何能無限放大」拆到骨頭裡——營運核心從人換成會自學的軟體。用痛點之尺補上它預設的那一格：放大器不挑內容，你要放大的那個東西，先確認真的有人要了嗎？',
  'path'  => '/lens/competing-in-the-age-of-ai',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《領導者的數位轉型》',
  'heading'   => '一座完美的工廠，照樣能量產沒人要的東西',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/competing-in-the-age-of-ai.html',
  'book'      => ['name' => '領導者的數位轉型', 'author' => 'Marco Iansiti 馬可・顏西提、Karim Lakhani 卡林・拉哈尼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你想規模化的那件事，真的有人在要嗎？',
    'body'    => '這本書教你把生意放大到沒有上限；但按下放大鍵之前，你得先確認那個需求外面真的有人在痛。現在就免費體檢一個點子，五分鐘看出它經不經得起放大。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '領導者的數位轉型',       'path' => '/lens/competing-in-the-age-of-ai'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
