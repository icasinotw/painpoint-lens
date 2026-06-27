<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '高汀要你學會看見客戶——可你在書桌前看見的，是想像出來的人：用痛點之尺重讀《這才是行銷》｜痛點 P.A.I.N.',
  'desc'  => '《這才是行銷》要你先學會看見客戶，這正是高汀比多數行銷書清醒的地方。但「看見」有兩種：他教的是用同理心想像，痛點之尺補上第二種——走出門，找一個叫得出名字、已經為這件事掏過錢的真人。',
  'path'  => '/lens/this-is-marketing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《這才是行銷》',
  'heading'   => '高汀要你學會看見客戶，你在書桌前看見的，是一個想像出來的人',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/this-is-marketing.html',
  'book'      => ['name' => '這才是行銷（This Is Marketing）', 'author' => 'Seth Godin 賽斯・高汀'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把想像出來的客戶，換成一個叫得出名字的真人',
    'body'    => '《這才是行銷》教你用同理心看見客戶；《痛點》這把尺，幫你確認那個人不是你自己想出來的。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '這才是行銷', 'path' => '/lens/this-is-marketing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
