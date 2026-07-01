<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '領導者的人脈,伊巴拉這篇的三種網｜經典觀念',
  'desc'  => '很會做事卻升不上去?組織行為學者伊巴拉與杭特2007年在《哈佛商業評論》的經典指出,領導要刻意經營三種人脈:把手邊事做好的營運人脈、撐開視野的個人人脈,以及看見未來、動員資源的策略人脈。用最白話的方式,帶你抓住從專才到領導的那道關卡。',
  'path'  => '/idea/how-leaders-create-networks',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 伊巴拉與杭特',
  'heading'   => '領導者的人脈，伊巴拉這篇的三種網',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/how-leaders-create-networks.html',
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
    ['name' => '領導者的人脈', 'path' => '/idea/how-leaders-create-networks'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
