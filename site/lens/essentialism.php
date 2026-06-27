<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你忙的那些事，多半是維他命：用痛點之尺重讀《少，但是更好》｜痛點 P.A.I.N.',
  'desc'  => '《少，但是更好》教你把不重要的事砍掉，但它假設你已經知道哪幾件值得留。用痛點的眼光重讀：把「驗一個生意值不值得做」的尺掉個頭，對準你自己的待辦清單——分清楚手上這件，到底是止痛藥還是維他命。',
  'path'  => '/lens/essentialism',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《少，但是更好》',
  'heading'   => '你忙的那些事，多半是維他命',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/essentialism.html',
  'book'      => ['name' => '少，但是更好', 'author' => 'Greg McKeown（葛瑞格·麥基昂）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '與其砍掉一堆，不如先驗清楚一件',
    'body'    => '《少，但是更好》教你把不重要的砍掉；但你留下的那件，真的有人在痛、值得你押上去嗎？現在就免費體檢一個點子，五分鐘看出它最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '少，但是更好',  'path' => '/lens/essentialism'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
