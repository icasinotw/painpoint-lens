<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '好主管不是只有一種樣子｜經典觀念',
  'desc'  => '同一套帶人方式，換個團隊就失靈。高曼歸納出六種領導風格，好主管會看場面換風格，像高爾夫選手依球況換球桿。這篇用白話帶你認清這六把球桿，以及哪幾種好用、哪幾種要小心。',
  'path'  => '/idea/leadership-that-gets-results',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 丹尼爾・高曼',
  'heading'   => '好主管不是只有一種樣子',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/leadership-that-gets-results.html',
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
    ['name' => '六種領導風格', 'path' => '/idea/leadership-that-gets-results'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
