<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《設計你的小習慣》｜痛點 P.A.I.N.',
  'desc'  => '福格的《設計你的小習慣》教你把習慣縮到清一顆牙、兩下伏地挺身那麼小，小到不靠衝勁也做得動。用痛點之尺重讀：抱著「一定有人要」的點子的你，卻反過來先蓋整間診所，花十八個月才第一次問陌生人要不要——把驗證縮到一顆牙的大小，答案這禮拜就到。',
  'path'  => '/lens/tiny-habits',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《設計你的小習慣》',
  'heading'   => '福格只要你清一顆牙，你卻替一個沒人要的點子蓋了整間診所',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/tiny-habits.html',
  'book'      => ['name' => '設計你的小習慣', 'author' => 'BJ Fogg BJ・福格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個「一定有人要」的點子，清過一顆牙了嗎？',
    'body'    => '福格不準你靠衝勁養習慣；同一把尺對準你的點子，就是趁它還只值一個下午，先讓三個陌生人替你驗一次。',
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
    ['name' => '設計你的小習慣',    'path' => '/lens/tiny-habits'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
