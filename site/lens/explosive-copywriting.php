<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '文案是放大器，先確認你手上有訊號：用痛點之尺重讀《如何在LINE、FB寫出爆款文案》｜痛點 P.A.I.N.',
  'desc'  => '關健明把產品規格翻譯成讀者身體裡發癢的渴望，教你寫出讓人當場下單的爆款文案。用痛點的眼光重讀：他這台放大器做到頂規，卻預設你手上的東西本來就有人要——而對只有一個點子的人，最沒被驗證、最該先確認的，正是這一格。',
  'path'  => '/lens/explosive-copywriting',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《如何在LINE、FB寫出爆款文案》',
  'heading'   => '文案是放大器，先確認你手上有訊號',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/explosive-copywriting.html',
  'book'      => ['name' => '如何在LINE、FB寫出爆款文案', 'author' => '關健明'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把擴大機開到最大之前，先量一下訊號',
    'body'    => '關健明教你把「想要」放到最大；痛點這把尺，幫你先確認線的另一頭真的有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
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
    ['name' => '如何在LINE、FB寫出爆款文案', 'path' => '/lens/explosive-copywriting'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
