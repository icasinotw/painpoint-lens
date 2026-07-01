<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '真實領導:領導不必模仿誰,做自己就夠了｜經典觀念',
  'desc'  => '比爾・喬治(Bill George)等人 2007 年在《哈佛商業評論》發表〈Discovering Your Authentic Leadership〉,訪談 125 位領導人後主張:最好的領導不是套上一個「主管該有的樣子」,而是從自己的人生故事、價值觀與支持圈裡,長出真實的領導力。用台灣職場的例子白話講清楚。',
  'path'  => '/idea/authentic-leadership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 比爾・喬治',
  'heading'   => '領導不必模仿誰，做得像自己就夠了',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/authentic-leadership.html',
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
    ['name' => '真實領導', 'path' => '/idea/authentic-leadership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
