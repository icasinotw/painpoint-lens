<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你蒐集的那一大把「有人要」，多半是雜訊：用痛點之尺重讀《精準預測》｜痛點 P.A.I.N.',
  'desc'  => '席佛在《精準預測》裡說，真相的訊號很小很安靜，雜訊卻又多又大聲，人天生往雜訊靠。創業也是一場預測——你蒐集的那一大把「有人要」(讚、問卷、朋友的鼓勵)多半是雜訊。用痛點的眼光重讀：訊號只有一種長相，一個你叫得出名字的真人真的付過錢。這禮拜把你最大聲的那條雜訊，逼成訊號。',
  'path'  => '/lens/the-signal-and-the-noise',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精準預測》',
  'heading'   => '你蒐集的那一大把「有人要」，多半是雜訊',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-signal-and-the-noise.html',
  'book'      => ['name' => '精準預測：如何從巨量雜訊中，看出重要的訊息？', 'author' => 'Nate Silver 奈特・席佛'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那張「市場很大」，是訊號，還是雜訊連出來的？',
    'body'    => '《精準預測》教你把訊號從雜訊裡濾出來；《痛點》這把尺，幫你認出創業唯一要緊的那個訊號——有沒有人真的為這個痛掏過錢。現在就免費體檢一個點子，五分鐘照出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '精準預測',  'path' => '/lens/the-signal-and-the-noise'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
