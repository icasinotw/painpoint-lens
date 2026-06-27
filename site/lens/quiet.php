<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '說服得了全場的點子，靠的正是坎恩要你提防的那種魅力：用痛點之尺重讀《安靜，就是力量》｜痛點 P.A.I.N.',
  'desc'  => '《安靜，就是力量》拆穿一個錯覺：我們把「很會講」當成「很懂」。用痛點的眼光重讀坎恩——你那個說服得了全場的點子，靠的正是她要你提防的魅力；唯一算數的，是一個真人付出的有代價動作。',
  'path'  => '/lens/quiet',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《安靜，就是力量》',
  'heading'   => '說服得了全場的點子，靠的正是坎恩要你提防的那種魅力',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/quiet.html',
  'book'      => ['name' => '安靜，就是力量：內向者如何發揮積極的力量！', 'author' => 'Susan Cain 蘇珊・坎恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是證據撐著，還是你自己越講越信的劇本？',
    'body'    => '坎恩教你別再崇拜講得最漂亮的版本；《痛點》這把尺，幫你把劇本換成證據。現在就免費體檢一個點子，五分鐘找出你最弱、最該先補的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '安靜，就是力量', 'path' => '/lens/quiet'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
