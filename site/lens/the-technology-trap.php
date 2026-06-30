<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你造的那台機器，會被誰半夜砸掉：用痛點之尺重讀《技術陷阱》｜痛點 P.A.I.N.',
  'desc'  => '牛津經濟學家弗雷《技術陷阱》用兩百年技術史，講工業革命到 AI 時代誰被機器甩下車。用痛點的眼光重讀：你要做的那個東西，一邊替某些人解痛，一邊正踩著另一些人的飯碗——而多數人動手前，只算了前面那一半的帳。',
  'path'  => '/lens/the-technology-trap',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《技術陷阱》',
  'heading'   => '你造的那台機器，會被誰半夜砸掉',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-technology-trap.html',
  'book'      => ['name' => '技術陷阱', 'author' => 'Carl Benedikt Frey 卡爾·貝內迪克特·弗雷'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你要做的那個東西，會把痛轉嫁給誰？',
    'body'    => '弗雷看的是一整個社會被技術弄痛的兩百年；而你手上那個點子，第一步該先搞清楚它替誰解痛、又動了誰。現在就花五分鐘免費體檢一個點子，把「誰在痛」這一格先量出來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '技術陷阱',       'path' => '/lens/the-technology-trap'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
