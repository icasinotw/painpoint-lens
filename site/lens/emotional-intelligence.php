<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '眼前那顆棉花糖，就是你急著動手的那個點子：用痛點之尺重讀《EQ》｜痛點 P.A.I.N.',
  'desc'  => '高曼《EQ》裡那顆棉花糖，考的是忍住眼前衝動、去換更大卻要等的東西。用痛點的眼光重讀：創業者眼前那顆，是「現在就動手做」的爽；先認出愛上點子的情緒，再走出門確認有沒有人要，才是換到兩顆的人。',
  'path'  => '/lens/emotional-intelligence',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《EQ》',
  'heading'   => '眼前那顆棉花糖，就是你急著動手的那個點子',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/emotional-intelligence.html',
  'book'      => ['name' => 'EQ（Emotional Intelligence）', 'author' => 'Daniel Goleman 丹尼爾・高曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是急著吃掉的棉花糖，還是真的有人在等？',
    'body'    => '《EQ》教你忍住眼前的衝動；《痛點》這把尺，幫你看清值不值得等。現在就免費體檢一個點子，五分鐘看「有沒有人在痛」那一格站不站得住；或翻翻《痛點》電子書。',
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
    ['name' => 'EQ',       'path' => '/lens/emotional-intelligence'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
