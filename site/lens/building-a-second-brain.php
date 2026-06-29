<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你存的每條筆記，都該先有個買主：用痛點之尺重讀《打造第二大腦》｜痛點 P.A.I.N.',
  'desc'  => '佛特的《打造第二大腦》教你把每個觸動你的念頭都捕捉、分類、存進一個外接的數位大腦。用痛點的眼光重讀：存下來不難，難的是這條筆記有沒有一個「要用它的人」在等——那個人，通常是你手上某件正要交出去的事。沒有買主的筆記囤再多，也只是一座你不會再走進去的倉庫；先替每條收藏點名一個買主，再決定收不收。',
  'path'  => '/lens/building-a-second-brain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《打造第二大腦》',
  'heading'   => '你存的每條筆記，都該先有個買主',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/building-a-second-brain.html',
  'book'      => ['name' => '打造第二大腦', 'author' => 'Tiago Forte（提亞戈・佛特）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你存的那些好東西，真的有人在等著用嗎？',
    'body'    => '挑一條你最近捨不得刪的筆記，問自己一句：我手上正在做的哪一件事，現在就用得到它？答不出來，先別急著收。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '打造第二大腦',    'path' => '/lens/building-a-second-brain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
