<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你腦裡那個想挑時機的天才，正在偷走你的錢：用痛點之尺重讀《持續買進》｜痛點 P.A.I.N.',
  'desc'  => '《持續買進》用一道算式證明：就算給你神級的擇時本事，幾十年下來也多半贏不過一個只會固定買、從不看盤的人。用痛點的眼光重讀馬朱利——那個讓你遲遲不敢進場的「等更好時機」，正是你遲遲不敢開始任何事的同一個念頭。',
  'path'  => '/lens/just-keep-buying',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《持續買進》',
  'heading'   => '你腦裡那個想挑時機的天才，正在偷走你的錢',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/just-keep-buying.html',
  'book'      => ['name' => '持續買進：資料科學家的投資終局思維，讓你愈早入市愈快累積財富（Just Keep Buying）', 'author' => 'Nick Maggiulli 尼克・馬朱利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂「等好時機」的代價之後，下一步先別又卡在原地',
    'body'    => '馬朱利逼你戒掉的，是「等一個更漂亮的價格再進場」這個念頭；你手上那件一直說「準備好再開始」的事，卡的常常是同一個念頭。把它攤開來照一照，看看你最常拿來拖延的那個藉口長什麼樣。',
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
    ['name' => '持續買進',  'path' => '/lens/just-keep-buying'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
