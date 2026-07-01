<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '三種價值準則：想樣樣贏的店為何常常樣樣輸｜經典觀念',
  'desc'  => '又想最便宜、又想最高級、又想最貼心,一家店真能樣樣贏?麥可・崔西與弗雷德・威瑟瑪(Michael Treacy & Fred Wiersema)1993 年在《哈佛商業評論》提出三種價值準則——營運卓越、產品領先、顧客親密——選一種做到頂尖、另兩種守及格就好。用超商、手搖飲、機車行的台灣例子白話講清楚。',
  'path'  => '/idea/value-disciplines',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 崔西與威瑟瑪',
  'heading'   => '想樣樣贏的店，為什麼常常樣樣輸？',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/value-disciplines.html',
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
    ['name' => '價值準則', 'path' => '/idea/value-disciplines'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
