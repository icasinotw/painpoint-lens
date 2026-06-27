<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把訊息擦到穴居人都秒懂，他還是不掏錢｜痛點 P.A.I.N.',
  'desc'  => '《跟誰行銷都成交》的穴居人測試很有名，卻只量「客戶看懂了沒」，從不量「想不想要」。用痛點之尺重讀米勒：那份七步驟腳本，你關起門一個人就能填到自己都信了，唯獨沒驗過外面到底有沒有人要。',
  'path'  => '/lens/building-a-storybrand',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《跟誰行銷都成交》',
  'heading'   => '你把訊息擦到穴居人都秒懂，他還是不掏錢',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/building-a-storybrand.html',
  'book'      => ['name' => '跟誰行銷都成交', 'author' => 'Donald Miller 唐納・米勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子的底數，是正的還是零？',
    'body'    => '米勒教你把訊息擦到穴居人都秒懂；《痛點》這把尺，先幫你確認被它乘的那個底數——到底有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '跟誰行銷都成交', 'path' => '/lens/building-a-storybrand'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
