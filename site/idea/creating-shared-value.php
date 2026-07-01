<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '共享價值:解決社會問題也能賺錢｜經典觀念',
  'desc'  => '解決社會問題和賺錢,一定要二選一嗎?波特與克瑞默2011年在《哈佛商業評論》提出「創造共享價值」(CSV),把社會需求當成新市場與省成本的來源。用最白話的方式帶你抓住三條路:把需求做成新產品、把生產線的浪費變雙贏、把在地產業聚落一起養起來。',
  'path'  => '/idea/creating-shared-value',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 波特與克瑞默',
  'heading'   => '共享價值：解決社會問題也能賺錢',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/creating-shared-value.html',
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
    ['name' => '共享價值', 'path' => '/idea/creating-shared-value'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
