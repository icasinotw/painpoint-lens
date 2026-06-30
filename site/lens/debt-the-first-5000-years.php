<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《債的歷史》｜痛點 P.A.I.N.',
  'desc'  => '格雷伯《債的歷史》說，錢是為了把模糊的虧欠壓成精確、收得回的數字而生。用痛點的眼光重讀：最會綁住你、逼你一直掏錢的那筆債，常常是「都投入這麼多了」——一筆你記給自己、卻沒人跟你要的沉沒成本舊帳。這禮拜把舊帳劃掉，只算從今天起再投下去能不能換回一個會掏錢的真人。',
  'path'  => '/lens/debt-the-first-5000-years',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《債的歷史》',
  'heading'   => '「都投入這麼多了」，是一筆你記給自己的帳',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/debt-the-first-5000-years.html',
  'book'      => ['name' => '債的歷史：從文明的初始到全球負債時代', 'author' => '大衛・格雷伯 David Graeber'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你撐著的那件事，外面真的有人在等嗎？',
    'body'    => '《債的歷史》讓你看清「都投入這麼多了」其實是一筆沉沒成本的舊帳；接下來該不該繼續，只看一件事——從今天起再投下去，換不換得回一個真的會掏錢的人。',
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
    ['name' => '債的歷史',  'path' => '/lens/debt-the-first-5000-years'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
