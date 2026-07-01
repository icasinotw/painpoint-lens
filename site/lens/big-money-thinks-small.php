<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '讓你興奮的那一塊，通常是你最不懂的那一塊：用痛點之尺重讀《大利從小》｜痛點 P.A.I.N.',
  'desc'  => '提靈赫斯特管低價股基金快三十年，靠的是「想小」——只下看得懂的注、死守不歸零。用痛點的眼光重讀《大利從小》：你點子裡最興奮的那一格，往往是你查得最少、也最可能讓你歸零的那一格。',
  'path'  => '/lens/big-money-thinks-small',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大利從小》',
  'heading'   => '讓你興奮的那一塊，通常是你最不懂的那一塊',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/big-money-thinks-small.html',
  'book'      => ['name' => '大利從小：華爾街傳奇基金經理人的投資智慧', 'author' => 'Joel Tillinghast 喬爾・提靈赫斯特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，哪一格是你在猜、卻撐著全局？',
    'body'    => '提靈赫斯特靠「只下看得懂的注」滾了快三十年。同樣一把尺，也能照你手上的點子：先圈出你其實在猜、卻攸關生死的那一格，再決定要不要往前衝。',
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
    ['name' => '大利從小',  'path' => '/lens/big-money-thinks-small'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
