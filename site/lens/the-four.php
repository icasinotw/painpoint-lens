<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '四巨頭從不問有沒有人要，因為那個「要」比它們老一萬歲：用痛點之尺重讀《四騎士主宰的未來》｜痛點 P.A.I.N.',
  'desc'  => '《四騎士主宰的未來》說四巨頭各自綁住一個一萬年沒變的人類本能（胃、性、腦、心），所以它們從不必確認「有沒有人要」。用痛點的眼光看：你想搬回車庫的是它們的引擎，缺的是它們一出生就站著的那塊地基——一個真實到不必驗證的需求。',
  'path'  => '/lens/the-four',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《四騎士主宰的未來》',
  'heading'   => '四巨頭鉤住的那個渴望，比它們老一萬歲',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-four.html',
  'book'      => ['name' => '四騎士主宰的未來：解析地表最強四巨頭 Amazon、Apple、Facebook、Google 的兆萬獲利密碼', 'author' => 'Scott Galloway 史考特・蓋洛威'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的點子，接的是一條一萬年的老神經，還是你昨天才想到的念頭？',
    'body'    => '《四騎士主宰的未來》教你看四巨頭憑什麼贏；《痛點》這把尺，幫你先確認自己的點子有沒有地基。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '四騎士主宰的未來',  'path' => '/lens/the-four'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
