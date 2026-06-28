<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那句「一定有人要」，是坐在辦公室裡打的包票：用痛點之尺重讀《路西法效應》｜痛點 P.A.I.N.',
  'desc'  => '《路西法效應》用史丹佛地下室與米爾格蘭電擊實驗證明：一個人會做什麼，得放進真實處境才看得到，履歷與測驗都猜不準。用痛點之尺重讀——你那句「一定有人要」只是坐在辦公室裡打的包票，真假只在一個陌生人肯不肯當場掏錢的處境裡。',
  'path'  => '/lens/the-lucifer-effect',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《路西法效應》',
  'heading'   => '你坐在辦公室，替它打了一張包票',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-lucifer-effect.html',
  'book'      => ['name' => '路西法效應：好人是如何變成惡魔的(The Lucifer Effect)', 'author' => 'Philip Zimbardo 菲利普・金巴多'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，最篤定的那句「一定有人要」，敢不敢拿去驗？',
    'body'    => '《路西法效應》說一個人會做什麼，得放進真實處境才看得到；你那個點子也一樣，先讓一個陌生人在真要掏錢的時刻，替你把「一定有人要」驗成真的或假的。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '路西法效應',   'path' => '/lens/the-lucifer-effect'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
