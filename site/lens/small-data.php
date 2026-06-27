<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他翻一翻你家冰箱，就讀出你沒說出口的渴望｜痛點 P.A.I.N.',
  'desc'  => '《小數據獵人》教你飛進別人家，從冰箱磁鐵和一雙舊鞋讀出沒說出口的渴望。用痛點之尺補上林斯壯沒逼你回答的那一格：你挖到的渴望，有沒有人已經為它付過帳——一個會痛到掏錢的痛，還是一個漂亮的嚮往。',
  'path'  => '/lens/small-data',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《小數據獵人》',
  'heading'   => '他翻一翻你家冰箱，就讀出你沒說出口的渴望',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/small-data.html',
  'book'      => ['name' => '小數據獵人', 'author' => 'Martin Lindstrom 馬汀・林斯壯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個渴望，找得到一張收據嗎？',
    'body'    => '林斯壯教你聞出客戶沒說出口的渴望；《痛點》這把尺，幫你確認那份渴望後面接不接得上一個會掏錢的人。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '小數據獵人', 'path' => '/lens/small-data'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
