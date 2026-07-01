<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '文案的放大鏡，底下得先有真火種：用痛點之尺重讀《美國文案大師私房密技大公開》｜痛點 P.A.I.N.',
  'desc'  => '雷・艾德華的 PASTOR 框架，把「寫一篇能賣東西的文案」拆成六個照得著的步驟，從描述痛、放大痛到開口成交。用痛點的眼光重讀：文案這面放大鏡忠實放大你對準的一切——對準真痛才點得著火，對準假痛只讓需求亮一晚就滅；在你動筆放大以前，先確認底下有真火種。',
  'path'  => '/lens/how-to-write-copy-that-sells',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《美國文案大師私房密技大公開》',
  'heading'   => '文案的放大鏡，底下得先有真火種',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/how-to-write-copy-that-sells.html',
  'book'      => ['name' => '美國文案大師私房密技大公開', 'author' => 'Ray Edwards 雷・艾德華'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '放大之前，先確認底下有火種',
    'body'    => '艾德華教你把痛放大到讀者坐不住；在你磨亮這手文案以前，先確認你要放大的那個痛是真的、已經有人在為它花錢。花五分鐘免費體檢一個點子，看出你最沒把握的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '美國文案大師私房密技大公開', 'path' => '/lens/how-to-write-copy-that-sells'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
