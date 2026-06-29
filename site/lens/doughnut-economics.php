<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '成長這個數字一直往上，量不到痛，也量不到代價：用痛點之尺重讀《甜甜圈經濟學》｜痛點 P.A.I.N.',
  'desc'  => '《甜甜圈經濟學》把經濟畫成一個甜甜圈：內圈是社會底線，掉進洞裡就有人挨餓沒水；外圈是地球上限，越界就把環境榨過了頭。用痛點的眼光重讀：GDP 這條只會往上的線，量不到誰還在痛、也量不到代價——拉沃斯逼一整門經濟學做的，跟你驗一個自己的點子，其實是同一個動作。',
  'path'  => '/lens/doughnut-economics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《甜甜圈經濟學》',
  'heading'   => '成長這個數字一直往上，量不到痛，也量不到代價',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/doughnut-economics.html',
  'book'      => ['name' => '甜甜圈經濟學（Doughnut Economics：Seven Ways to Think Like a 21st-Century Economist）', 'author' => 'Kate Raworth 凱特・拉沃斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把甜甜圈縮小到你自己手上那件事',
    'body'    => '拉沃斯逼一整個經濟去回答的那兩題——還有誰在痛、這是拿什麼換的——同樣能拿來照你手上那個讓你得意的數字。花幾分鐘，把你最近一直在追的那個點子，攤開照一照它最弱的那一軸。',
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
    ['name' => '甜甜圈經濟學', 'path' => '/lens/doughnut-economics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
