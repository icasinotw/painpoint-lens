<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '高效團隊會吵好架｜經典觀念',
  'desc'  => '開會一片和氣，其實很危險。艾森哈特、卡瓦吉與布爾喬亞1997年在《哈佛商業評論》的〈How Management Teams Can Have a Good Fight〉，研究出讓團隊「吵事不吵人」的六個做法：靠事實、多擺選項、共同大目標、幽默、平衡權力、有保留的共識。用台灣家族公司、小店主管群的例子白話拆解。',
  'path'  => '/idea/good-fight',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 艾森哈特、卡瓦吉與布爾喬亞',
  'heading'   => '高效團隊會吵好架',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/good-fight.html',
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
    ['name' => '高效團隊會吵好架', 'path' => '/idea/good-fight'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
