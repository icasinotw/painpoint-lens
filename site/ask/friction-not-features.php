<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '功能加一堆用戶卻無感？「摩擦變少」檢查你的產品真解決了什麼｜痛點之尺',
  'desc'  => '你加了一堆功能，用戶卻無感?因為價值不在功能多，在你有沒有把他原本卡住的那個摩擦移掉、讓痛變輕。一份「摩擦變少」檢查:把你的解法對著用戶的笨方法量——原本幾步、現在幾步?那個卡點消失了沒，還是你只是又疊了更多功能?最狠的一關:把最得意的功能刪掉，那「替他少掉的一步」還在不在。',
  'path'  => '/ask/friction-not-features',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺・拆問題 · 摩擦變少',
  'heading'   => '功能加了一大堆，用戶卻無感——我的產品到底解決了什麼？',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/friction-not-features.html',
  'back'      => ['url' => '/ask', 'label' => '← 全部拆問題'],
  'root'      => ['name' => '拆問題', 'path' => '/ask'],
  'funnel'    => [
    'title'   => '加功能以前，先量一遍「摩擦有沒有真的變少」',
    'body'    => '免費的點子體檢，會帶你照 P.A.I.N. 一格一格，把「你的解法到底替使用者拿掉了哪一步」這題，誠實量過一遍——省得你又用「我加了多少功能」，蓋掉「他到底少做了多少」那題。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/ask/kill-or-keep', 'label' => '副業做了半年，不上不下——是該收掉，還是再撐一下？'],
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '拆問題',     'path' => '/ask'],
    ['name' => '摩擦變少',   'path' => '/ask/friction-not-features'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
