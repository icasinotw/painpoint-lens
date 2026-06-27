<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '報酬有它的價格，你卻一直想白拿：用痛點之尺拆《致富心態》｜痛點 P.A.I.N.',
  'desc'  => '《致富心態》最狠的一課：市場報酬有它的價格，叫做波動——你以為那是懲罰、想閃掉，其實是進場的門票費，不繳就拿不到複利。用痛點的眼光重讀，把每個理財決定背後那張看不見的價格標籤，先算成數字再動手。',
  'path'  => '/lens/the-psychology-of-money',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《致富心態》',
  'heading'   => '報酬有它的價格，你卻一直想白拿',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/the-psychology-of-money.html',
  'book'      => ['name' => '致富心態（The Psychology of Money）', 'author' => 'Morgan Housel 摩根・豪瑟'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂帳單之後，下一個點子先別急著付錢',
    'body'    => '《致富心態》讓你看見自己跟錢之間那些彆扭的地方；《痛點》這把尺，幫你驗證你想衝過去的下一個點子，值不值得你把時間和錢押下去。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '致富心態',    'path' => '/lens/the-psychology-of-money'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
