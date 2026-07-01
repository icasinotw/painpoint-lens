<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '大腦裡的決策陷阱,聰明人也照樣中招｜經典觀念',
  'desc'  => '買東西被開價綁架、明知虧錢卻捨不得收、只聽得進自己想聽的話——這些不是笨,是大腦內建的決策陷阱。哈佛商業評論經典〈The Hidden Traps in Decision Making〉,用台灣日常小例子帶你認得定錨、維持現狀、沉沒成本、確認偏誤與框架效應,學會在它們動手那一秒多想三秒。',
  'path'  => '/idea/hidden-traps-decision',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 哈蒙德、基尼與拉伊法',
  'heading'   => '大腦裡的決策陷阱，聰明人也照樣中招',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/hidden-traps-decision.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典,值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本,當你進門的橋。讀懂了觀念,更多用同一種眼光拆解的商業經典,都在拆書區等你。',
    'primary' => ['url' => '/lens', 'label' => '去看更多拆書'],
    'ghost'   => ['url' => '/idea', 'label' => '更多經典觀念'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '決策陷阱',   'path' => '/idea/hidden-traps-decision'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
