<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別問客戶是誰，問他雇你的東西去辦哪件事：用痛點之尺重讀《創新的用途理論》｜痛點 P.A.I.N.',
  'desc'  => '《創新的用途理論》用一杯早餐奶昔翻轉創新：別問客戶是誰，問他「雇」你的東西去辦哪件事。用痛點的眼光重讀：克里斯汀生這套挖掘術全建在「已經有人掏錢買」的真實購買上，而你抱著的點子連一筆成交都還沒有，就急著替它編一個漂亮的用途故事。',
  'path'  => '/lens/competing-against-luck',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創新的用途理論》',
  'heading'   => '那杯奶昔被破解的時候，天還沒亮就有人掏錢買它了',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/competing-against-luck.html',
  'book'      => ['name' => '創新的用途理論：用過去的銷售解釋未來的消費，創新不再是憑運氣', 'author' => 'Clayton M. Christensen 克雷頓・克里斯汀生 等'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，怕自己又在替它編一個漂亮的用途故事？',
    'body'    => '《創新的用途理論》教你讀懂客戶想辦成什麼。先別急著替點子配用途，花五分鐘把它放上檯面，看出最弱的是哪一格——到底有沒有人真的為這件事掏過錢。',
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
    ['name' => '創新的用途理論',  'path' => '/lens/competing-against-luck'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
