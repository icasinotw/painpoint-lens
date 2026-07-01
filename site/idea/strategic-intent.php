<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '策略雄心：小蝦米怎麼扳倒大鯨魚｜經典觀念',
  'desc'  => '蓋瑞・哈默爾與 C.K. 普哈拉 1989 年在《哈佛商業評論》發表的〈Strategic Intent〉,講資源少的挑戰者如何靠一個數十年不散的長期企圖心,一步步扳倒資源雄厚的巨人。這篇用白話帶你抓住幾個重點:先立一個看似不可能的目標、刻意拉伸、把有限資源槓桿到極致、再切成一段段打得贏的小仗。',
  'path'  => '/idea/strategic-intent',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 哈默爾與普哈拉',
  'heading'   => '小蝦米怎麼扳倒大鯨魚，策略雄心這篇經典的重點',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/strategic-intent.html',
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
    ['name' => '策略雄心', 'path' => '/idea/strategic-intent'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
