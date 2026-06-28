<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '有人付了訂金，就代表「驗證過了」嗎？真鈔與假鈔的四道光｜痛點之尺',
  'desc'  => '有人付了小訂金、預購，可以全力開做了嗎？錢是最誠實的證據，但鈔票也有假的。錢真的動了嗎、是陌生人還是熟人捧場、原價還是跳樓價、退不退得了——四道光透一遍，分清哪幾筆「成交」才算數。能讓陌生人用原價、不可退地掏一次錢，才開始信。',
  'path'  => '/ask/preorder-validation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺・拆問題 · 預購算不算驗證',
  'heading'   => '有人付了訂金，就代表「驗證過了」嗎？',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/preorder-validation.html',
  'back'      => ['url' => '/ask', 'label' => '← 全部拆問題'],
  'root'      => ['name' => '拆問題', 'path' => '/ask'],
  'funnel'    => [
    'title'   => '真鈔到底有幾張？讓尺逼你誠實數一遍',
    'body'    => '免費的點子體檢，會帶你把一個點子照 P.A.I.N. 從頭問到尾，逼你誠實面對「真鈔到底有幾張」。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/ask/empty-market', 'label' => '一個「沒人在做」的點子，該興奮，還是該逃？'],
  'next'      => ['url' => '/ask/kill-or-keep', 'label' => '副業做了半年，不上不下——是該收掉，還是再撐一下？'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '拆問題',         'path' => '/ask'],
    ['name' => '預購算不算驗證',  'path' => '/ask/preorder-validation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
