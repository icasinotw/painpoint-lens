<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '策略是什麼?波特這篇經典的三個重點｜經典觀念',
  'desc'  => '策略是什麼?哈佛商學院教授麥可・波特1996年的經典〈What Is Strategy?〉,常被引用卻少人真的讀懂。用最白話的方式帶你抓住三個重點:把事情做得更好只是基本功、策略是刻意選擇做不一樣的事、而它的靈魂是敢於取捨——決定「不做」什麼。',
  'path'  => '/idea/what-is-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 麥可・波特',
  'heading'   => '策略是什麼？波特這篇經典的三個重點',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/what-is-strategy.html',
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
    ['name' => '策略是什麼', 'path' => '/idea/what-is-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
