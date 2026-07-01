<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《不懂帶人，你就自己做到死！》｜痛點 P.A.I.N.',
  'desc'  => '石田淳用行為科學把帶人變成可複製的方法：別再管看不見的「態度」，去管數得出來的「行為」。用痛點的眼光重讀，這跟《痛點》要創業者別信「市場很大」的故事、去數真人有沒有付錢，是同一個動作——把腦裡的判斷，降落成攤得開的證據。',
  'path'  => '/lens/the-art-of-teaching',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《不懂帶人，你就自己做到死！》',
  'heading'   => '石田淳要你把「態度」這個詞，從辦公室裡拿掉',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-art-of-teaching.html',
  'book'      => ['name' => '不懂帶人，你就自己做到死！', 'author' => '石田淳 Jun Ishida'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你對某個下屬的差評，數得出來嗎？',
    'body'    => '石田淳要你把「他態度不好」換成「一週做對幾次」；同一把尺，對準你手上任何一個「我覺得……」的判斷都成立——先降落成數字，再開口下結論。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                          'path' => '/'],
    ['name' => '痛點之尺',                       'path' => '/lens'],
    ['name' => '不懂帶人，你就自己做到死！',        'path' => '/lens/the-art-of-teaching'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
