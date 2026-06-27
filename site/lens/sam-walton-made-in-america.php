<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沃爾頓讓收銀機替他投票，你那個點子，還沒讓一個真人投過：用痛點之尺重讀《富甲天下》｜痛點 P.A.I.N.',
  'desc'  => '《富甲天下》是沃爾頓親述沃爾瑪如何從一家小鎮雜貨店，長成全球最大零售商。用痛點之尺重讀：他從不相信任何關於顧客的說法，除非有真人用錢證明——而你那個點子，最該先贏的，正是他當年在小鎮門口贏到的第一票。',
  'path'  => '/lens/sam-walton-made-in-america',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《富甲天下》',
  'heading'   => '沃爾頓讓收銀機替他投票，你那個點子，還沒讓一個真人投過',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/sam-walton-made-in-america.html',
  'book'      => ['name' => '富甲天下', 'author' => '山姆・沃爾頓（Sam Walton）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，還沒讓一個真人投過票',
    'body'    => '《富甲天下》教你把一家店經營到稱霸；先用《痛點》這把尺，確認門外到底有沒有人在排隊。免費體檢一個點子，五分鐘看出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '富甲天下',    'path' => '/lens/sam-walton-made-in-america'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
