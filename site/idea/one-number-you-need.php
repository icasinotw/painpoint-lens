<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '只問一題，就能預測公司會不會成長｜經典觀念',
  'desc'  => '與其發二十題的滿意度問卷，不如只問一題：你有多可能推薦我們？本文用台灣小店的例子，白話講清楚賴克赫爾德的淨推薦值（NPS）怎麼算、為什麼比長問卷更能預測成長。',
  'path'  => '/idea/one-number-you-need',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 弗雷德・賴克赫爾德',
  'heading'   => '只問一題，就能預測公司會不會成長',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/one-number-you-need.html',
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
    ['name' => '只問一題預測成長', 'path' => '/idea/one-number-you-need'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
