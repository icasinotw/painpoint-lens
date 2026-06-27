<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你問了市場一句就動手，那句最值錢的「還有呢」從沒問出口：用痛點之尺重讀《你是來帶人，不是幫部屬做事》｜痛點 P.A.I.N.',
  'desc'  => '《你是來帶人，不是幫部屬做事》把教練功夫收成七個問句，最利的是「還有呢？」。用痛點之尺重讀：你問市場一句就跑去動工，從沒追那句「還有呢」，而它真正的答案，只藏在有沒有人肯掏錢裡。',
  'path'  => '/lens/the-coaching-habit',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《你是來帶人，不是幫部屬做事》',
  'heading'   => '你問了市場一句就動手，最值錢的那句「還有呢」，從沒問出口',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-coaching-habit.html',
  'book'      => ['name' => '你是來帶人，不是幫部屬做事：少給建議，問對問題，運用 7 個關鍵問句，養成教練式領導力！', 'author' => 'Michael Bungay Stanier 麥可・邦吉・史戴尼爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，往下追過三個「還有呢」嗎？',
    'body'    => '《你是來帶人，不是幫部屬做事》教你別搶著替部屬給答案；《痛點》這把尺，幫你把同一套盤問轉向市場——先確認真的有人在痛、肯掏錢，再動手。現在就免費體檢一個點子，五分鐘看出你最虛的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '你是來帶人，不是幫部屬做事', 'path' => '/lens/the-coaching-habit'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
