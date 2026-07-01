<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '創新為何一再失敗?肯特的四個經典陷阱｜經典觀念',
  'desc'  => '創新一再失敗,常不是點子不好,而是掉進可預測的老陷阱。哈佛教授羅莎貝絲・肯特2006年在《哈佛商業評論》的經典,把陷阱歸在四面:只接大案子瞧不起小創新、用管舊業務那套掐死新芽、新舊單位隔絕、整組換掉丟了人脈記憶。用白話帶你認識這四個坑與解方。',
  'path'  => '/idea/innovation-classic-traps',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 羅莎貝絲・肯特',
  'heading'   => '創新為何一再失敗？肯特的四個經典陷阱',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/innovation-classic-traps.html',
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
    ['name' => '創新的經典陷阱', 'path' => '/idea/innovation-classic-traps'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
