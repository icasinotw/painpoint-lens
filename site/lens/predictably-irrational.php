<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '白送的時候，連不要的人都會說好：用痛點之尺重讀《誰說人是理性的》｜痛點 P.A.I.N.',
  'desc'  => '艾瑞利的免費巧克力實驗證明：價格一歸零，人就不再冷靜地秤值不值，連不要的都會伸手。用痛點的眼光重讀《誰說人是理性的》——你那一疊免費換來的「我會用」，多半只是貪小便宜時伸的那隻手。想讀懂真需求，先在那聲「好」後面，加上一個不是零的代價，再看他還說不說好。',
  'path'  => '/lens/predictably-irrational',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《誰說人是理性的》',
  'heading'   => '白送的時候，連不要的人都會說好',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/predictably-irrational.html',
  'book'      => ['name' => '誰說人是理性的', 'author' => 'Dan Ariely 丹・艾瑞利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你收回來那一疊「我會用」，是免費換來的，還是有人付過代價？',
    'body'    => '艾瑞利用一顆免費巧克力證明：人在價格歸零的那一刻，判斷力最不能信。你那套免費問卷、免費試用、逮人問一句「會不會用」，量的多半是「白送好不好拿」，不是「有沒有人要」。《痛點》這把尺，幫你在拿家當下注之前，先找出最沒被代價驗過的那一軸。現在就免費體檢一個點子，五分鐘看出最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '誰說人是理性的', 'path' => '/lens/predictably-irrational'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
