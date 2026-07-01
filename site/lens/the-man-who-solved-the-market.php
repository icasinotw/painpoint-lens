<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你賭的是訊號，還是自己編的故事：用痛點之尺重讀《洞悉市場的人》｜痛點 P.A.I.N.',
  'desc'  => '西蒙斯的文藝復興公司三十年只賭一再出現的統計訊號，對動聽的故事一律當耳邊風。用痛點的眼光重讀《洞悉市場的人》：你手上那個點子，是驗證過的訊號，還是你太想相信、編給自己聽的故事？',
  'path'  => '/lens/the-man-who-solved-the-market',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《洞悉市場的人》',
  'heading'   => '你賭的是訊號，還是自己編的故事',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-man-who-solved-the-market.html',
  'book'      => ['name' => '洞悉市場的人：量化交易之父吉姆‧西蒙斯與文藝復興公司的故事', 'author' => 'Gregory Zuckerman 古格里・佐克曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，靠的是訊號，還是一個好聽的故事？',
    'body'    => '西蒙斯三十年只賭驗證過的訊號、對故事免疫。同一把尺，也能照你手上的點子：先分清楚哪些是你編給自己聽的故事、哪些是真人用行為投過的票，再決定要不要往前衝。',
    'primary' => ['url' => '/lens', 'label' => '← 回全部拆書'],
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
    ['name' => '洞悉市場的人',  'path' => '/lens/the-man-who-solved-the-market'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
