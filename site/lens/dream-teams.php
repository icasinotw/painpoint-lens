<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '都聽你的夢幻團隊，只會把錯放得更大：用痛點之尺重讀《雜牌軍也可以是夢幻團隊》｜痛點 P.A.I.N.',
  'desc'  => '尚恩・斯諾《雜牌軍也可以是夢幻團隊》證明:開會都點頭、上下同心的隊伍最危險。用痛點的眼光重讀——那個會頂你、跟你唱反調的隊友,其實是在替你的點子做免費的需求驗證;把摩擦當內耗消音,等於拆掉隊伍裡唯一的驗貨機。',
  'path'  => '/lens/dream-teams',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《雜牌軍也可以是夢幻團隊》',
  'heading'   => '都聽你的夢幻團隊，只會把錯放得更大',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/dream-teams.html',
  'book'      => ['name' => '雜牌軍也可以是夢幻團隊（Dream Teams）', 'author' => 'Shane Snow 尚恩・斯諾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個「大家都同意」的決定，驗過了嗎？',
    'body'    => '斯諾要你在隊伍裡養一個會頂你的人，替你的想法做需求驗證;同一套「別被順順的共識騙走、先確認痛是真的」的紀律,也能拿去量你手上正在推的那個點子。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '雜牌軍也可以是夢幻團隊', 'path' => '/lens/dream-teams'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
