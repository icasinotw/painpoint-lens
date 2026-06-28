<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子，是一顆沒校準就發射的砲彈：用痛點之尺拆《十倍勝，絕不單靠運氣》｜痛點 P.A.I.N.',
  'desc'  => '柯林斯在《十倍勝，絕不單靠運氣》教企業「先射子彈、再射砲彈」：先用便宜的小試射校準，再把資源重壓上去。用痛點的眼光重讀——你那個還沒驗過的點子，做出來上線就是一顆沒校準的砲彈；最便宜、也最該先打的那一發子彈，是去問外面到底有沒有人要。',
  'path'  => '/lens/great-by-choice',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《十倍勝，絕不單靠運氣》',
  'heading'   => '沒校準就發射的那顆砲彈，叫你那個點子',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/great-by-choice.html',
  'book'      => ['name' => '十倍勝，絕不單靠運氣（Great by Choice）', 'author' => 'Jim Collins 詹姆・柯林斯、Morten Hansen 莫頓・韓森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是校準過的，還是沒校準的？',
    'body'    => '《十倍勝》教你重壓之前先試射；《痛點》這把尺，幫你把第一發子彈對準「有沒有人要」。現在就免費體檢一個點子，五分鐘看出你最沒底、最該先試射的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',                   'path' => '/'],
    ['name' => '痛點之尺',                'path' => '/lens'],
    ['name' => '十倍勝，絕不單靠運氣',     'path' => '/lens/great-by-choice'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
