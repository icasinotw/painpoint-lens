<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '奧格威寫了一句警告，然後走過去了：用痛點之尺重讀《數位時代的奧格威談廣告》｜痛點 P.A.I.N.',
  'desc'  => '楊名皓把奧格威的廣告功夫更新到數位時代，整本書都在教你怎麼把廣告放大得更猛——卻只用一句話帶過「沒有什麼比好廣告更快搞死一個爛產品」。用 P.A.I.N. 把那句警告放大成一個動作：架放大鏡之前，先確認鏡頭底下那個痛是真的、有人已經為它掏過錢。',
  'path'  => '/lens/ogilvy-on-advertising-in-the-digital-age',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《數位時代的奧格威談廣告》',
  'heading'   => '奧格威寫了一句警告，然後走過去了',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/ogilvy-on-advertising-in-the-digital-age.html',
  'book'      => ['name' => '數位時代的奧格威談廣告', 'author' => 'Miles Young 楊名皓'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '架起放大鏡之前，先確認鏡頭底下那個痛是真的',
    'body'    => '奧格威教你把廣告放大得更猛；在你付第一塊廣告費之前，花五分鐘體檢這個點子，看看那個痛夠不夠深、有沒有人已經在為它花錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '數位時代的奧格威談廣告',  'path' => '/lens/ogilvy-on-advertising-in-the-digital-age'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
