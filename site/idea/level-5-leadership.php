<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '第五級領導：謙遜與意志，一個奇怪的組合｜經典觀念',
  'desc'  => '吉姆・柯林斯在《哈佛商業評論》提出「第五級領導」：能把公司從優秀帶到卓越的人，不是舞台上光芒四射的明星，而是把功勞往窗外推、把責任往鏡子裡扛的人。用白話加台灣在地例子，帶你看懂謙遜與堅定為何缺一不可。',
  'path'  => '/idea/level-5-leadership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 吉姆・柯林斯',
  'heading'   => '第五級領導：謙遜與意志，一個奇怪的組合',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/level-5-leadership.html',
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
    ['name' => '第五級領導', 'path' => '/idea/level-5-leadership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
