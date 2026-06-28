<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '副業做半年不上不下，該收掉還是再撐？三下讀數教你判斷｜痛點之尺',
  'desc'  => '副業做了半年，不上不下，該收還是該撐？先分清「還沒驗完」（該撐）和「驗完了答案是 No」（該停）。讀三個騙不了人的跡象:除了你還有誰在痛、有沒有陌生人原價付過、沒有你天天去補它還活不活得下去。痛點是創業的起點，但不是終點——肯撐，也肯收，才是真本事。',
  'path'  => '/ask/kill-or-keep',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺・拆問題 · 該停還是該撐',
  'heading'   => '副業做了半年，不上不下——是該收掉，還是再撐一下？',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/kill-or-keep.html',
  'back'      => ['url' => '/ask', 'label' => '← 全部拆問題'],
  'root'      => ['name' => '拆問題', 'path' => '/ask'],
  'funnel'    => [
    'title'   => '再撐之前，先讓尺幫你誠實讀一遍',
    'body'    => '免費的點子體檢，會帶你照 P.A.I.N. 一格一格，把「該停還是該撐」背後的真相，誠實量過一遍——省得你又用「我夠不夠努力」這題，蓋掉「它到底成不成立」那題。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/ask/preorder-validation', 'label' => '有人付了訂金，就代表「驗證過了」嗎？'],
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '拆問題',        'path' => '/ask'],
    ['name' => '該停還是該撐',  'path' => '/ask/kill-or-keep'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
