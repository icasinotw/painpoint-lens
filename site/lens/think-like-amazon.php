<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '亞馬遜的新聞稿，是寫給你想像出來的客人：用痛點之尺重讀《亞馬遜數位成長思維》｜痛點 P.A.I.N.',
  'desc'  => '羅斯曼《亞馬遜數位成長思維》最值得單獨拆的一招是「倒著做」——東西還沒做，先把上市那天的新聞稿一字一句寫完。用痛點的眼光照它：那是企業界最接近需求驗證的動作，卻在你的桌上就停了。那張稿子的客人是你想的、痛是你猜的，寫得再動人，也得走出門找一個真人對一次答案。',
  'path'  => '/lens/think-like-amazon',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《亞馬遜數位成長思維》',
  'heading'   => '亞馬遜的新聞稿，是寫給你想像出來的客人',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/think-like-amazon.html',
  'book'      => ['name' => '亞馬遜數位成長思維', 'author' => 'John Rossman 約翰·羅斯曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '那張新聞稿裡的客人，外面真的找得到嗎？',
    'body'    => '羅斯曼教你倒著做，先把上市那天的新聞稿寫好；而你得確認那張稿子裡為它掏錢的人，外面真有幾個。花五分鐘把那個點子跑一遍，看「有沒有人在痛」這格亮不亮燈。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '亞馬遜數位成長思維',       'path' => '/lens/think-like-amazon'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
