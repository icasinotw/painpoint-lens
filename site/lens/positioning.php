<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '響亮的定位，救不了沒人要的東西：用痛點之尺重讀《定位》｜痛點 P.A.I.N.',
  'desc'  => '《定位》教你佔住客人心裡的一個詞、被他記住，卻從不問有沒有人要。用 P.A.I.N. 四問拆它：它強在「怎麼被客人挑中」，卻把「到底有沒有人在痛」整關留給了你。被記住是第二步，先確認有人想要。',
  'path'  => '/lens/positioning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《定位》',
  'heading'   => '響亮的定位，救不了沒人要的東西',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/positioning.html',
  'book'      => ['name' => '定位：在眾聲喧嘩的市場裡，進駐消費者心靈的最佳方法', 'author' => 'Al Ries、Jack Trout'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想被記住之前，先確認有沒有人要？',
    'body'    => '《定位》教你怎麼被客人挑中；《痛點》這把尺，先幫你驗證到底有沒有人在痛、痛到會掏錢。現在就免費體檢一個點子，五分鐘量出你最弱的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '定位',      'path' => '/lens/positioning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
