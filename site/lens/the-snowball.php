<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《雪球：巴菲特傳》：你拿巴菲特的計分卡，替點子鼓了掌｜痛點 P.A.I.N.',
  'desc'  => '《雪球》寫巴菲特靠一張只給自己看的「內部計分卡」過完一生，那張卡只認攤在帳本上、騙不了人的數字。用痛點的眼光重讀：你正拿同一張卡替自己的點子鼓掌，卻漏了唯一算數的一格——到今天，有幾個真人真的為它付過錢。',
  'path'  => '/lens/the-snowball',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《雪球：巴菲特傳》',
  'heading'   => '巴菲特那張計分卡只認一個數字，你拿掌聲湊不出來',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-snowball.html',
  'book'      => ['name' => '雪球：巴菲特傳', 'author' => 'Alice Schroeder 艾莉絲・施洛德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，計分卡上那一格，填上名字了嗎？',
    'body'    => '巴菲特讓雪球滾起來之前，一定先確認那把雪是濕的；《痛點》這把尺，幫你在押上時間和積蓄之前，先確認有沒有人真的要。現在就免費體檢一個點子，五分鐘找出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '雪球：巴菲特傳', 'path' => '/lens/the-snowball'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
