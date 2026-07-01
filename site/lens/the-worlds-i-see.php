<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '大家都在改演算法，她賭機器沒見過真實世界：用痛點之尺重讀《我看見的世界》｜痛點 P.A.I.N.',
  'desc'  => '李飛飛《我看見的世界》表面是一本 AI 科學家的自傳，骨子裡藏著痛點最看重的第一個動作：動手以前，先確認你要解的瓶頸真的長在你以為的地方。全領域埋頭磨演算法，她退一步賭「機器缺的是見識」——用痛點的眼光，把這場賭注拆成你今天用得上的一堂驗證課。',
  'path'  => '/lens/the-worlds-i-see',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《我看見的世界》',
  'heading'   => '大家都在改演算法，她賭機器沒見過真實世界',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-worlds-i-see.html',
  'book'      => ['name' => '我看見的世界：AI 科學家李飛飛的視界之旅', 'author' => 'Fei-Fei Li 李飛飛'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在磨的那把刀，砍得到肉嗎？',
    'body'    => '李飛飛先確認了水在哪，才動鏟。你手上那個點子，也值得在拚命打磨以前先確認一次：你以為的瓶頸，是不是真瓶頸。痛點這把尺，幫你把這件事問清楚。',
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
    ['name' => '我看見的世界', 'path' => '/lens/the-worlds-i-see'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
