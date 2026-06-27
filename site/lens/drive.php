<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '動機真不真，把獎金停掉就知道：用痛點之尺重讀《動機，單純的力量》｜痛點 P.A.I.N.',
  'desc'  => '以色列幼兒園對遲到罰錢，遲到的人反而變多。《動機，單純的力量》戳穿外在獎勵的真相：它是給動機打的補貼，撐著人會動、一撤就崩。用痛點的「需求驗證」眼光分辨：你的幹勁是真需求，還是補貼來的？',
  'path'  => '/lens/drive',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《動機，單純的力量》',
  'heading'   => '動機真不真，把獎金停掉就知道',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/drive.html',
  'book'      => ['name' => '動機，單純的力量', 'author' => 'Daniel H. Pink 丹尼爾・品克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那股幹勁，是真需求還是補貼來的？',
    'body'    => '《動機，單純的力量》幫你看穿獎金的真相；《痛點》這把尺，幫你驗證外面到底有沒有人在痛。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '動機，單純的力量', 'path' => '/lens/drive'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
