<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別抄底一個你「相信會回來」的點子：用痛點之尺拆《笑傲股市》｜痛點 P.A.I.N.',
  'desc'  => '歐尼爾解剖一百多年來漲最兇的股票，發現大贏家起漲時幾乎都不便宜、都在創新高——他從不抄底一支「相信會回來」的便宜貨。用痛點之尺重讀這本選股經典：別愛上一個沒人搶的便宜點子，先去看外面有沒有人真的在掏錢。',
  'path'  => '/lens/how-to-make-money-in-stocks',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《笑傲股市》',
  'heading'   => '別抄底一個你「相信會回來」的點子',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/how-to-make-money-in-stocks.html',
  'book'      => ['name' => '笑傲股市：歐尼爾投資致富經典（How to Make Money in Stocks）', 'author' => 'William J. O\'Neil 威廉・歐尼爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你愛上的點子，是真有人要，還是只是「空著、看起來該輪到我」？',
    'body'    => '歐尼爾只跟著「已經有人在搶」的證據走；同一把尺，也能量你手上那個點子——先去看外面有沒有人真的在為它掏錢。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '笑傲股市',   'path' => '/lens/how-to-make-money-in-stocks'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
