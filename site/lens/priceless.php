<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那句「一定有人要」，跟一個隨機號碼喊出的價一樣可信｜痛點 P.A.I.N.',
  'desc'  => '龐士東在《洞悉價格背後的心理戰》裡證明：人腦沒有一把衡量價值的尺，一個隨機數字就能定你的出價。用痛點之尺重讀——你那句「一定有人要」，跟學生照證件末兩碼喊出的價一樣，是被你沒留意的錨牽著走；而唯一作弊不了的錨，是一個陌生人主動掏出來的真錢。',
  'path'  => '/lens/priceless',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《洞悉價格背後的心理戰》',
  'heading'   => '你心裡那個價，跟隨機轉出的號碼一樣可信',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/priceless.html',
  'book'      => ['name' => '洞悉價格背後的心理戰', 'author' => 'William Poundstone 威廉・龐士東'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在替點子賭上三年之前，先換一個你作弊不了的答案',
    'body'    => '龐士東證明，你越說得頭頭是道，越可能只是被一個亂數錨住。《痛點》這把尺，逼你去拿一個沒辦法替自己作弊的證據——一個陌生人主動掏出來的真錢。現在就免費體檢一個點子，五分鐘看出最空的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '洞悉價格背後的心理戰', 'path' => '/lens/priceless'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
