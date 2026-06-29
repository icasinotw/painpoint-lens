<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你問來的「要」，沒有一個掏過錢｜痛點 P.A.I.N.',
  'desc'  => '傅利曼《資本主義與自由》把自由的地基押在一個樸素動作上：一筆交易要成，得買賣雙方都自願掏出點東西，沒人逼、各自划算才算數。用痛點之尺重讀：你那個點子收到的「要」多半是免費的點頭，市場真正認的那張票要有人掏錢才算數，而那幾票得你自己一張一張生回來。',
  'path'  => '/lens/capitalism-and-freedom',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《資本主義與自由》',
  'heading'   => '你問來的「要」，沒有一個掏過錢',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/capitalism-and-freedom.html',
  'book'      => ['name' => '資本主義與自由', 'author' => 'Milton Friedman 米爾頓・傅利曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那張「要」，掏過錢了嗎',
    'body'    => '傅利曼讓你看懂市場為什麼只認自願掏出來的代價；你那個點子最該驗的，也是這件事。趁還沒辭職、沒寫半行程式，先走出去，看幾個真有這個痛的人，上次為它實際掏過多少時間和錢。',
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
    ['name' => '資本主義與自由', 'path' => '/lens/capitalism-and-freedom'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
