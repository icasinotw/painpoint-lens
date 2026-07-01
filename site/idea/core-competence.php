<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '核心競爭力：別盯著果實，看你的樹根｜經典觀念',
  'desc'  => '核心競爭力是什麼？普哈拉與哈默爾1990年在《哈佛商業評論》的經典〈The Core Competence of the Corporation〉，把公司比喻成一棵樹：產品是果實，核心競爭力是看不見的樹根。用台灣傳統小廠、手搖飲、家族企業的例子，帶你三分鐘看懂該盯哪裡、怎麼分辨真假核心。',
  'path'  => '/idea/core-competence',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 普哈拉與哈默爾',
  'heading'   => '核心競爭力：別盯著果實，看你的樹根',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/core-competence.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典，值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本，當你進門的橋。讀懂了觀念，更多用同一種眼光拆解的商業經典，都在拆書區等你。',
    'primary' => ['url' => '/lens', 'label' => '去看更多拆書'],
    'ghost'   => ['url' => '/idea', 'label' => '更多經典觀念'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '核心競爭力', 'path' => '/idea/core-competence'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
