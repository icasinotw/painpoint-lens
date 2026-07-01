<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '創新者的 DNA：五種可以練的技能｜經典觀念',
  'desc'  => '突破性創新是天賦嗎？戴爾、葛瑞格森與克里斯汀生2009年在《哈佛商業評論》的〈The Innovator’s DNA〉說不是——創新者靠五種能練的技能：聯想、提問、觀察、社交、實驗。聯想是核心，其他四種是餵給它的養分。用便當店、手搖飲、夜市攤商的例子，帶你今天就開始練。',
  'path'  => '/idea/innovators-dna',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 戴爾、葛瑞格森與克里斯汀生',
  'heading'   => '創新者的 DNA：五種可以練的技能',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/innovators-dna.html',
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
    ['name' => '創新者的 DNA', 'path' => '/idea/innovators-dna'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
