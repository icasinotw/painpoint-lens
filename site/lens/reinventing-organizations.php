<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《重塑組織》｜痛點 P.A.I.N.',
  'desc'  => '《重塑組織》把「青色組織」描繪得太美，美到讓人想立刻照抄。用痛點的眼光重讀萊盧自己埋的那條線：那十二家公司沒有一家是衝著理念去的，每一家背後都先有一個算得出來的痛在推。沒有真痛，再美的組織藍圖都裝不上去。',
  'path'  => '/lens/reinventing-organizations',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《重塑組織》',
  'heading'   => '沒有那個痛，再美的組織藍圖都裝不上去',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/reinventing-organizations.html',
  'book'      => ['name' => '重塑組織：進化型組織的創建之道', 'author' => 'Frederic Laloux 弗雷德里克・萊盧'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在搬進任何漂亮做法之前，先確認那個痛是真的',
    'body'    => '萊盧筆下的公司，沒有一家是被願景打動才動手的，是被一個算得出來的痛逼出來的。組織如此，你手上的點子也是——動手前，先確認底下真的有人在痛。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '重塑組織',   'path' => '/lens/reinventing-organizations'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
