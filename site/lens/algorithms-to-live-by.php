<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '再看一個就好，是最貴的一句話：用痛點之尺重讀《決斷的演算》｜痛點 P.A.I.N.',
  'desc'  => '《決斷的演算》把「該租哪間房、要不要換工作、要不要再等等」這些惱人的決定，對應到電腦科學早就算過的演算法。用痛點的眼光重讀：那句「再看一個就好」過了某個點，就成了你能說的最貴的一句話——好決定的關鍵，常是知道什麼時候該收手。',
  'path'  => '/lens/algorithms-to-live-by',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《決斷的演算》',
  'heading'   => '再看一個就好，是最貴的一句話',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/algorithms-to-live-by.html',
  'book'      => ['name' => '決斷的演算', 'author' => 'Brian Christian 布萊恩・克里斯汀、Tom Griffiths 湯姆・葛瑞菲斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先算清代價，再決定要不要再看一個',
    'body'    => '《決斷的演算》替「想太多」標出了代價：過了某個點，多看一個只是在拖延。同一個提問，也能對準你的點子——先確認痛在哪、值多少，再決定動手。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '決斷的演算',    'path' => '/lens/algorithms-to-live-by'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
