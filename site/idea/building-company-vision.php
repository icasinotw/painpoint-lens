<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '打造企業願景:什麼該死守、什麼該大膽改｜經典觀念',
  'desc'  => '吉姆・柯林斯與傑瑞・薄樂斯 1996 年在《哈佛商業評論》發表的〈Building Your Company\'s Vision〉,把「願景」拆成核心理念與想像的未來兩塊,並提出膽大包天的目標(BHAG)。用台灣老店與家族企業的例子,講清楚什麼該死守、什麼該大膽改。',
  'path'  => '/idea/building-company-vision',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 柯林斯與薄樂斯',
  'heading'   => '該變的與不能動的：柯林斯的願景兩塊論',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/building-company-vision.html',
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
    ['name' => '打造企業願景', 'path' => '/idea/building-company-vision'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
