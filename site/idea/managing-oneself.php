<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '杜拉克教你管理自己,先弄懂五個問題｜經典觀念',
  'desc'  => '你花了好多力氣規劃公司、規劃專案,卻從沒好好規劃過「自己」。現代管理學之父彼得・杜拉克1999年的經典〈Managing Oneself〉(管理你自己),用幾個自問帶你認識自己:長處在哪、我是讀者型還是聽者型、價值觀合不合、我屬於哪裡、又該貢獻什麼。用最白話的方式抓住重點。',
  'path'  => '/idea/managing-oneself',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 彼得・杜拉克',
  'heading'   => '杜拉克教你管理自己，先弄懂五個問題',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/managing-oneself.html',
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
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '管理你自己', 'path' => '/idea/managing-oneself'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
