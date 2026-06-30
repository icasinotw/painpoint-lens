<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《經濟學的40堂公開課》｜痛點 P.A.I.N.',
  'desc'  => '傑斯坦尼《經濟學的40堂公開課》把四百年經濟學史，講成同一齣戲：每個世代都打造一個完美理性的「經濟人」，再眼睜睜看真人把模型踩出一條歪路。用痛點的眼光重讀：你那套「做出來一定有人用」的盤算，就是你私藏的經濟人模型——漂亮、自洽，只差沒問過半個真人。這禮拜挑出最承重的那條假設，去看一個真人怎麼花錢。',
  'path'  => '/lens/a-little-history-of-economics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《經濟學的40堂公開課》',
  'heading'   => '他們花四百年，算一個根本不存在的人',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/a-little-history-of-economics.html',
  'book'      => ['name' => '經濟學的40堂公開課', 'author' => '奈爾・傑斯坦尼 Niall Kishtainy'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那套「一定有人用」，問過半個真人嗎？',
    'body'    => '《經濟學的40堂公開課》讓你看清：再漂亮的模型，都架在一個你還沒見過的假想人身上。接下來只看一件事——把最承重的那條假設，拿去對一個真人驗一次。',
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
    ['name' => '經濟學的40堂公開課', 'path' => '/lens/a-little-history-of-economics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
