<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '帳面上很賺，不代表真的有錢進來：用痛點之尺重讀《財報就像一本故事書》｜痛點 P.A.I.N.',
  'desc'  => '劉順仁的《財報就像一本故事書》教你把財報讀成一家公司的自傳，尤其要你別被漂亮的盈餘騙，去盯它藏不住的現金。用痛點的眼光重讀：你正想做的那個點子，其實也是一張你在腦中寫好的損益表——而且幾乎一定是賺的。劉順仁問一家公司的那句「那現金流量表呢」，原封不動就能拿來問你自己：在真的有人掏錢以前，那張漂亮的帳，跟博達帳上那六十幾億，是同一種還沒被驗過的數字。',
  'path'  => '/lens/financial-statements-as-a-storybook',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《財報就像一本故事書》',
  'heading'   => '帳面上很賺，不代表真的有錢進來',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/financial-statements-as-a-storybook.html',
  'book'      => ['name' => '財報就像一本故事書', 'author' => '劉順仁'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '學會問一家公司「錢呢」，下一步先問問你自己的點子',
    'body'    => '劉順仁教你掀開一家公司的帳、看現金到底進來沒；你腦中那個還沒動手的點子，缺的正是同一格——到今天為止，真的有人為它掏過錢嗎。花五分鐘把它攤開照一照，看出你最弱、最沒驗過的那一塊。',
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
    ['name' => '財報就像一本故事書',     'path' => '/lens/financial-statements-as-a-storybook'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
