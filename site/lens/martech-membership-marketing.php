<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最貴的會員資料庫，也撐在一個沒人填的前提上：用痛點之尺重讀《以MARTECH經營大數據會員行銷》｜痛點 P.A.I.N.',
  'desc'  => '高端訓《以MARTECH經營大數據會員行銷》把會員經營拆成一套照表操課的工程，卻是從你「已經有一群會回來的會員」那一刻才開機。用痛點之尺補上資料庫沒有的那一格：先確認他們是為真實的痛而來，不是被點數租住，再來談精準推播。',
  'path'  => '/lens/martech-membership-marketing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《以MARTECH經營大數據會員行銷》',
  'heading'   => '最貴的會員資料庫，也撐在一個沒人填的前提上',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/martech-membership-marketing.html',
  'book'      => ['name' => '以MARTECH經營大數據會員行銷', 'author' => '高端訓'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那群會員，是為真實的痛而來，還是被點數租住？',
    'body'    => '挑出後台判定為「最有價值」的五個人，一個個打電話問他：上回特地跑這一趟，要是那天沒有點數、沒有會員日，你還會來嗎，那天你本來想解決什麼？把他們真正在解的事，逐字記下來。',
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
    ['name' => '以MARTECH經營大數據會員行銷', 'path' => '/lens/martech-membership-marketing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
