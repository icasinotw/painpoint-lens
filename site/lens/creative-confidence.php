<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '怕蛇的人摸到真蛇才好，你那個點子也得摸到一個真客戶｜痛點 P.A.I.N.',
  'desc'  => '《創意自信帶來力量》搬出班杜拉治怕蛇的實驗，證明膽量靠真的碰到、不靠空想。可你替自己的點子建立信心，幾乎全在隔著玻璃打氣。用痛點之尺重講凱利兄弟：你那個點子的蛇，是一個願意掏錢的真人。',
  'path'  => '/lens/creative-confidence',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創意自信帶來力量》',
  'heading'   => '怕蛇的人摸到真蛇才好，你那個點子也得摸到一個真客戶',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/creative-confidence.html',
  'book'      => ['name' => '創意自信帶來力量', 'author' => 'Tom Kelley 湯姆・凱利、David Kelley 大衛・凱利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，碰過幾次真的東西？',
    'body'    => '《創意自信帶來力量》要你靠真的接觸長出膽量；《痛點》這把尺，幫你看清你那個點子最空、最沒被真人驗過的是哪一格。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '創意自信帶來力量', 'path' => '/lens/creative-confidence'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
