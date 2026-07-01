<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '創新的紀律，不是等靈感，是有系統地找機會｜經典觀念',
  'desc'  => '創新常被當成天才的靈光乍現，其實它是一種可以練的紀律。跟著杜拉克，學會有系統地去意外、落差、人口變化裡翻找機會，用便當店、地方診所、傳統小廠的例子帶你上手。',
  'path'  => '/idea/discipline-of-innovation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 彼得・杜拉克',
  'heading'   => '創新的紀律，不是等靈感，是有系統地找機會',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/discipline-of-innovation.html',
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
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '創新的紀律', 'path' => '/idea/discipline-of-innovation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
