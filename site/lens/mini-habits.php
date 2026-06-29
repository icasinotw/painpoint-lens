<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《驚人習慣力》｜痛點 P.A.I.N.',
  'desc'  => '史蒂芬・蓋斯把成功縮到一下伏地挺身就算數，小到不可能輸——天天贏一次，你才留在場上。用痛點之尺重讀《驚人習慣力》：抱著點子的你，卻把「成功」設在上線那天才一翻兩瞪眼，幾個月不給自己贏一次。把「贏」縮到今天就收得到的一個真實答案，你會在上線之前，就先摸清楚手上到底有沒有東西。',
  'path'  => '/lens/mini-habits',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《驚人習慣力》',
  'heading'   => '蓋斯把成功縮到一下伏地挺身，小到不可能輸',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/mini-habits.html',
  'book'      => ['name' => '驚人習慣力', 'author' => '史蒂芬・蓋斯 Stephen Guise'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的點子，上一次「贏一次」是什麼時候？',
    'body'    => '蓋斯不準你靠一股勁硬撐到上線那天；同一把尺對準你的點子，就是把「贏」縮到今天就收得到的一個真實答案。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '驚人習慣力',     'path' => '/lens/mini-habits'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
