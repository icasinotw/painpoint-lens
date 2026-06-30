<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把製造出來的需求刮掉，剩下的才敢賣：用痛點之尺重讀《B型選擇》｜痛點 P.A.I.N.',
  'desc'  => '綠藤生機花錢拍廣告告訴你「可能不需要化妝水」，《B型選擇》把這家公司的選擇寫成了故事。用痛點之尺重讀：綠藤做的是一場徹底的需求驗證——把廣告製造出來的偽需求刮掉，只留下顧客真的會痛的那一塊。你正在賣的東西，禁得起這樣刮一次嗎？',
  'path'  => '/lens/greenvines',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《B型選擇》',
  'heading'   => '把製造出來的需求刮掉，剩下的才敢賣',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/greenvines.html',
  'book'      => ['name' => 'B型選擇：給很在意「意義」的你，這裡有一個關於勇氣與相信的故事', 'author' => '王維玲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你賣的東西，刮掉一半還站得住嗎？',
    'body'    => '綠藤敢勸顧客少買，是因為它先確認了「有人真的會痛、會持續回購」。你手上的點子，那塊真痛站不站得住？花五分鐘把它跑一遍最弱的那一軸。',
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
    ['name' => 'B型選擇',  'path' => '/lens/greenvines'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
