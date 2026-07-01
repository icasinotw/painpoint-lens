<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '說服的科學：席爾迪尼的六個開關｜經典觀念',
  'desc'  => '說服不是天生的口才，而是有原理可循的科學。心理學家席爾迪尼在《哈佛商業評論》歸納六個開關：互惠、承諾與一致、社會認同、喜好、權威、稀有，每一條都配一個台灣在地小例子，帶你看懂也學會用。',
  'path'  => '/idea/science-of-persuasion',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 羅伯特・席爾迪尼',
  'heading'   => '說服的科學：席爾迪尼的六個開關',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/science-of-persuasion.html',
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
    ['name' => '說服的科學', 'path' => '/idea/science-of-persuasion'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
