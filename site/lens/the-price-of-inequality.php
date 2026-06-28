<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你替那個點子估的身價，是你自己當裁判頒給自己的金牌嗎？｜痛點 P.A.I.N.',
  'desc'  => '史迪格里茲《不公平的代價》最利的一刀叫「尋租」：頂層的財富很多是握著規則尋來的，不是憑空創造出來的。用痛點之尺重讀：你替那個點子估的身價，是你自己畫跑道、自己當裁判頒給自己的金牌——這禮拜，辦一場你左右不了、要陌生人掏錢的比賽。',
  'path'  => '/lens/the-price-of-inequality',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《不公平的代價》',
  'heading'   => '那面金牌，是你當裁判頒給自己的',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-price-of-inequality.html',
  'book'      => ['name' => '不公平的代價（The Price of Inequality）', 'author' => 'Joseph E. Stiglitz 約瑟夫・史迪格里茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，身價是你自己一個人估出來的？',
    'body'    => '在你再替它多辦一場你穩贏的比賽之前，先把它交到一個不認識你、不會給你面子的陌生人手上，看他肯不肯掏錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '不公平的代價',           'path' => '/lens/the-price-of-inequality'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
