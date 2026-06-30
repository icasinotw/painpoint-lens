<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那座越疊越高的知識庫，有人來借嗎：用痛點之尺重讀《知識複利》｜痛點 P.A.I.N.',
  'desc'  => '《知識複利》把「知識會利滾利」做成一套輸出系統，教你累積成專家品牌。用痛點的眼光補一刀：複利只負責放大、不負責挑方向——開機前先確認，你要深耕一輩子的那個主題，外面真的有人在等。',
  'path'  => '/lens/knowledge-compounding',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《知識複利》',
  'heading'   => '你那座越疊越高的知識庫，有人來借嗎',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/knowledge-compounding.html',
  'book'      => ['name' => '知識複利筆記術', 'author' => '何則文、高永祺'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你想複利的那個專業，有人在等嗎？',
    'body'    => '《知識複利》教你把零碎知識滾成一個專家品牌；真要開機前，先用痛點的眼光確認：你選來深耕一輩子的那個主題，外面有沒有一群人正在等。五分鐘體檢一個你心裡的點子。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '知識複利',  'path' => '/lens/knowledge-compounding'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
