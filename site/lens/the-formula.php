<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《成功竟然有公式》｜痛點 P.A.I.N.',
  'desc'  => '巴拉巴西《成功竟然有公式》把幾百萬筆數據倒進電腦，算出五條成功規律。最震撼的第一條：當一件事的好壞量不出來，決定你紅不紅的，是你被多少人看見、落在哪張人際網絡上，而不是你把它做得多好。用痛點的眼光重讀：你悶頭把產品刨到反光，卻從沒推開門確認外面有沒有人要——先確認外面真有人要，再回頭把它做得更好。',
  'path'  => '/lens/the-formula',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《成功竟然有公式》',
  'heading'   => '你把東西做到頂，世界還是沒看見你',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-formula.html',
  'book'      => ['name' => '成功竟然有公式(The Formula: The Universal Laws of Success)', 'author' => 'Albert-László Barabási 巴拉巴西'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的力氣，全砸在自己使得上力的那一欄了嗎？',
    'body'    => '巴拉巴西用幾百萬筆數據證明，你悶頭把東西做得更好，不等於外面就有人要它。把同一把尺掉頭往外量，先看看你那個點子，外面到底有沒有人真的想要。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '成功竟然有公式',    'path' => '/lens/the-formula'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
