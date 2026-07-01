<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '商業模式再創新的四塊拼圖｜經典觀念',
  'desc'  => '真正的創新常不是新產品，而是重組你怎麼賺錢。強森、克里斯汀生與卡格曼2008年在《哈佛商業評論》的〈Reinventing Your Business Model〉提出四塊拼圖：顧客價值主張、利潤公式、關鍵資源、關鍵流程。用便當店、手搖飲、傳統小廠的例子，帶你看懂四塊怎麼咬合。',
  'path'  => '/idea/reinventing-business-model',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 強森、克里斯汀生與卡格曼',
  'heading'   => '商業模式再創新的四塊拼圖',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/reinventing-business-model.html',
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
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '商業模式再創新', 'path' => '/idea/reinventing-business-model'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
