<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '零流失：顧客流失率降一點,利潤為何漲一大截｜經典觀念',
  'desc'  => '賴克赫爾德與薩瑟(Frederick Reichheld & W. Earl Sasser)1990 年在《哈佛商業評論》發表的〈Zero Defections〉指出,顧客流失率只要降 5%,利潤能漲兩三成到近一倍。用手搖飲會員的帳,白話拆給你聽:為什麼留住舊客比拉新客值錢、流失率如何複利放大、怎麼把流失當品質指標來管。',
  'path'  => '/idea/zero-defections',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 賴克赫爾德與薩瑟',
  'heading'   => '顧客流失率降一點，利潤為何漲一大截',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/zero-defections.html',
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
    ['name' => '零流失', 'path' => '/idea/zero-defections'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
