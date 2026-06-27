<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '賈伯斯也做過沒人要的漂亮東西：用痛點之尺重讀《賈伯斯傳》｜痛點 P.A.I.N.',
  'desc'  => '賈伯斯那句「消費者不知道自己要什麼」，是創業者跳過需求驗證最常用的擋箭牌。但《賈伯斯傳》裡，連他都一再賠在沒人要的漂亮東西上。用痛點的眼光重讀：他賭的從不是「有沒有人要」，而你正想跳過的，恰恰是那一關。',
  'path'  => '/lens/steve-jobs',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《賈伯斯傳》',
  'heading'   => '賈伯斯也做過沒人要的漂亮東西，而且不只一次',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/steve-jobs.html',
  'book'      => ['name' => '賈伯斯傳', 'author' => 'Walter Isaacson 華特・艾薩克森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是賈伯斯的方塊，還是真的有人在等？',
    'body'    => '賈伯斯賭得起一台沒人要的方塊，你賭不起。動手之前，先用《痛點》這把尺驗一次：五分鐘免費體檢你的點子，看「有沒有人在痛」那一格站不站得住；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '賈伯斯傳',  'path' => '/lens/steve-jobs'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
