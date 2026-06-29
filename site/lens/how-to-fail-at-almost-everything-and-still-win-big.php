<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《要怎麼樣幾乎做什麼都失敗卻還是大獲全勝》｜痛點 P.A.I.N.',
  'desc'  => '《呆伯特》作者亞當斯失敗了一卡車，卻沒有哪一局把身家全推上桌——他讓現實先投票，再決定加碼。用痛點的眼光重讀：多數人愛上腦中那個漂亮劇本就 All in，跳過了「到底有沒有人要」這一步；他的小賭注，本質上是一連串便宜的需求驗證。',
  'path'  => '/lens/how-to-fail-at-almost-everything-and-still-win-big',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《要怎麼樣幾乎做什麼都失敗卻還是大獲全勝》',
  'heading'   => '他輸了一百把，每一把都押得很小',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/how-to-fail-at-almost-everything-and-still-win-big.html',
  'book'      => ['name' => '要怎麼樣幾乎做什麼都失敗卻還是大獲全勝（How to Fail at Almost Everything and Still Win Big）', 'author' => 'Scott Adams 史考特・亞當斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別把全部籌碼推給一個沒驗過的夢',
    'body'    => '亞當斯沒有等熱情來推他 All in，他用一連串便宜的小賭注，讓現實先告訴他哪條路有人回頭看；下次你想為某件事豁出去之前，先設計一個賠得起的版本，丟出去探一探。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '要怎麼樣幾乎做什麼都失敗卻還是大獲全勝', 'path' => '/lens/how-to-fail-at-almost-everything-and-still-win-big'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
