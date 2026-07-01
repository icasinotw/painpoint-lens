<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '波特五力，教你看懂一個產業賺不賺錢｜經典觀念',
  'desc'  => '麥可・波特一九七九年在《哈佛商業評論》提出的五力分析，用五股結構性力量解釋一個產業為什麼好賺或難賺：現有對手、新進者、替代品、供應商、顧客。用手搖飲、便當店這些台灣在地例子，三分鐘幫你把五力抓進手裡。',
  'path'  => '/idea/five-competitive-forces',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 麥可・波特',
  'heading'   => '波特五力，教你看懂一個產業賺不賺錢',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/five-competitive-forces.html',
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
    ['name' => '波特五力',  'path' => '/idea/five-competitive-forces'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
