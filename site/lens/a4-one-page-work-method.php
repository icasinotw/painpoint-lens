<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《孫正義教我的A4工作法》｜痛點 P.A.I.N.',
  'desc'  => '三木雄信《孫正義教我的A4工作法》把孫正義的快拆給你看：能進他桌上的每件事，都先壓成一頁A4、幾個數字、一張圖，讓人五秒就點頭。用痛點的眼光重讀：一頁紙是擴音器，會讓對的想法和錯的想法一起傳得又快又遠。在把提案做到無懈可擊之前，先確認那張A4底下，真的站著幾個等著要的人。',
  'path'  => '/lens/a4-one-page-work-method',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《孫正義教我的A4工作法》',
  'heading'   => '那張完美的A4，沒問過一句有沒有人要',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/a4-one-page-work-method.html',
  'book'      => ['name' => '孫正義教我的A4工作法', 'author' => '三木雄信'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '那張漂亮的一頁，底下站著幾個真人？',
    'body'    => '在把一件事壓成孫正義那種又快又漂亮的A4之前，先花十分鐘做更前面一件事：寫下此刻正在為這件事掏錢或掏時間的幾個真名。底下站得住人，那張紙才值得做漂亮。',
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
    ['name' => '孫正義教我的A4工作法',     'path' => '/lens/a4-one-page-work-method'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
