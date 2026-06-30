<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '成交，藏在『為什麼』後面那一句：用痛點之尺重讀《銷售的技術》｜痛點 P.A.I.N.',
  'desc'  => '貝特格《銷售的技術》最厲害的一手，是問「您為什麼會想保這個？除了這個還有別的嗎？」把客戶嘴上的理由翻過來、找出真正的痛。用痛點的眼光重讀：同樣兩句問話，往前挪到你動手之前，就是一次需求驗證。',
  'path'  => '/lens/how-i-raised-myself-from-failure-to-success-in-selling',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《銷售的技術》',
  'heading'   => '成交，藏在『為什麼』後面那一句',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/how-i-raised-myself-from-failure-to-success-in-selling.html',
  'book'      => ['name' => '銷售的技術', 'author' => 'Frank Bettger（法蘭克・貝特格）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最得意的那個點子，痛是真的嗎？',
    'body'    => '貝特格在成交當下找痛；你可以把同樣兩句問話往前挪——在動手之前，先弄清楚那個痛到底是真的，還是自己想像出來的。',
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
    ['name' => '銷售的技術', 'path' => '/lens/how-i-raised-myself-from-failure-to-success-in-selling'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
