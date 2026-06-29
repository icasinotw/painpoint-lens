<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '冠軍，是從一雙襪子開始綁的：用痛點之尺重讀《團隊，從傳球開始》｜痛點 P.A.I.N.',
  'desc'  => '約翰・伍登在 UCLA 拿下十座 NCAA 冠軍，球季第一天卻先教球員怎麼穿襪子、綁鞋帶。用痛點的眼光重讀《團隊，從傳球開始》：冠軍是從最不性感的基本功疊起來的，而你抱著點子最想跳過的那一步，正是「先確認真的有人要」。',
  'path'  => '/lens/the-essential-wooden',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《團隊，從傳球開始》',
  'heading'   => '冠軍，是從一雙襪子開始綁的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-essential-wooden.html',
  'book'      => ['name' => '團隊，從傳球開始', 'author' => 'John Wooden 約翰・伍登'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你急著做的那個點子，跳過了哪一步基本功？',
    'body'    => '伍登先把鞋帶綁好才上場；同一把尺對著你手上的點子問一句：在埋頭做出來之前，你確認過真的有人要嗎？',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '團隊，從傳球開始', 'path' => '/lens/the-essential-wooden'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
