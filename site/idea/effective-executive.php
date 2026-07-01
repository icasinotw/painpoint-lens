<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '怎樣才算有效的主管：杜拉克的八個做法｜經典觀念',
  'desc'  => '彼得・杜拉克在《哈佛商業評論》說，有效的主管不必天生會領導，也不必個性外向；有效是一套能練的習慣。用台灣在地例子白話拆解他歸納的八個做法，把「該做什麼」變成「有人負責到底」。',
  'path'  => '/idea/effective-executive',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 彼得・杜拉克',
  'heading'   => '怎樣才算有效的主管：杜拉克的八個做法',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/effective-executive.html',
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
    ['name' => '有效的主管', 'path' => '/idea/effective-executive'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
