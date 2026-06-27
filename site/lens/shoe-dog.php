<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他每年都賺錢，卻每年都差點破產：用痛點之尺重讀《跑出全世界的人》｜痛點 P.A.I.N.',
  'desc'  => '《跑出全世界的人》裡，菲爾・奈特的 Nike 營收年年翻倍，卻年年差點破產——東西太有人要，現金被自己的成長吃光。用痛點之尺重讀這本創業自傳：先確認有人要只是上半場，進來的錢接不接得上先出去的錢，才是多數創業故事不愛講的那一關。',
  'path'  => '/lens/shoe-dog',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《跑出全世界的人》',
  'heading'   => '他每年都賺錢，卻每年都差點破產',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/shoe-dog.html',
  'book'      => ['name' => '跑出全世界的人：Nike 創辦人菲爾・奈特夢想路上的勇氣與初心', 'author' => 'Phil Knight 菲爾・奈特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，撐得過錢進來之前的空檔嗎？',
    'body'    => '奈特先確認了有人要，還是差點倒在現金流上。《痛點》這把尺，先幫你把最容易致命的需求那一關驗清楚——現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',             'path' => '/'],
    ['name' => '痛點之尺',          'path' => '/lens'],
    ['name' => '跑出全世界的人',     'path' => '/lens/shoe-dog'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
