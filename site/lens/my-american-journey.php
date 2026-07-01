<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '壓上全部之前，將軍會先問這場仗值不值得打：用痛點之尺重讀《我的美國之旅》｜痛點 P.A.I.N.',
  'desc'  => '鮑威爾自傳《我的美國之旅》裡最出名的「鮑威爾主義」，骨子裡是一張開火前的檢查表。用痛點的眼光重讀：你把積蓄與時間全壓上去之前，可曾先問過那座山頭上到底有沒有人、值不值得攻？',
  'path'  => '/lens/my-american-journey',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《我的美國之旅》',
  'heading'   => '壓上全部之前，將軍會先問這場仗值不值得打',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/my-american-journey.html',
  'book'      => ['name' => '我的美國之旅：鮑威爾將軍自傳（My American Journey）', 'author' => 'Colin Powell 柯林・鮑威爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你動手之前，替那座山頭問過「值不值得攻」嗎？',
    'body'    => '鮑威爾開火前先跑一張檢查表確認目標；搬到你正在做的事上，就是別在確認有沒有人要之前，先把積蓄與時間全壓下去。',
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
    ['name' => '我的美國之旅', 'path' => '/lens/my-american-journey'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
