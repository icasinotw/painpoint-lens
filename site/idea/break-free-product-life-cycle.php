<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '跳脫產品生命週期,穆恩的三種定位法｜經典觀念',
  'desc'  => '產品真的會老嗎?哈佛教授文英・穆恩2005年《哈佛商業評論》經典〈Break Free from the Product Life Cycle〉指出,產品會衰退常是被困在比膩的類別裡。用白話帶你抓住三種定位法:逆向定位大膽拿掉標配、脫離定位換個類別重新做人、敵意定位不討好所有人。',
  'path'  => '/idea/break-free-product-life-cycle',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 文英・穆恩',
  'heading'   => '跳脫產品生命週期，穆恩的三種定位法',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/break-free-product-life-cycle.html',
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
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '跳脫產品生命週期', 'path' => '/idea/break-free-product-life-cycle'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
