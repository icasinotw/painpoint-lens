<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的點子，只算到第一階段｜痛點 P.A.I.N.',
  'desc'  => '索維爾在《經濟學的思考方式》用六七百頁、零公式，只練一個動作：聽到任何好聽的說法，先問「然後呢」，把後果算到第一階段以外。用痛點之尺重讀：你那個點子最好看的第一階段掌聲零成本，真正的帳單，藏在你最不想往下算的第二、第三格，還有那個只有真人掏過錢才浮得出來的價格。',
  'path'  => '/lens/basic-economics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《經濟學的思考方式》',
  'heading'   => '你的點子，只算到第一階段',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/basic-economics.html',
  'book'      => ['name' => '經濟學的思考方式', 'author' => 'Thomas Sowell 湯瑪斯・索維爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '往下算一格，就看見點子的真面目',
    'body'    => '索維爾教你把後果算到第一階段以外；你那個點子最該往下算的，是「到底有沒有人要」。趁還沒辭職、沒寫半行程式，先走出去，看幾個真有這個痛的人現在怎麼將就、上次為它掏過多少時間和錢。',
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
    ['name' => '經濟學的思考方式', 'path' => '/lens/basic-economics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
