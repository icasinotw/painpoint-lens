<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '行銷短視症:你以為你在賣什麼?李維特這篇經典的三個重點｜經典觀念',
  'desc'  => '行銷短視症是什麼?行銷學者希奧多・李維特1960年在《哈佛商業評論》發表的經典〈Marketing Myopia〉,一句話點破許多老店的死法:把生意定義得太窄。用最白話的方式帶你抓住三個重點:你以為你在賣什麼決定你活多久、沒有天生的成長產業只有會不會抓成長的公司、別愛上你的產品要愛顧客的需求。',
  'path'  => '/idea/marketing-myopia',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 希奧多・李維特',
  'heading'   => '行銷短視症：你以為你在賣什麼？',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/marketing-myopia.html',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '經典觀念',    'path' => '/idea'],
    ['name' => '行銷短視症',  'path' => '/idea/marketing-myopia'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
