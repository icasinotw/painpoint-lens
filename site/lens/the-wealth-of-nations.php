<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你收到的「要」，多半是別人的好心｜痛點 P.A.I.N.',
  'desc'  => '亞當・史密斯《國富論》最有名的那句話：晚餐不來自屠夫、釀酒商、麵包師的仁慈，而來自他們各自的盤算。用痛點之尺重讀：你那疊「要」多半燒的是好心、交情、不忍心，能養活生意的卻是有人為自己而來——而這種人，你還沒找夠。',
  'path'  => '/lens/the-wealth-of-nations',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《國富論》',
  'heading'   => '你收到的「要」，多半是別人的好心',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-wealth-of-nations.html',
  'book'      => ['name' => '國富論', 'author' => 'Adam Smith 亞當・史密斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那疊「要」，有人為自己而來嗎',
    'body'    => '史密斯讓你看懂市場只認「各為自己」的盤算；你那個點子最該驗的也是這件事。趁還沒辭職、沒寫半行程式，先走出去，看幾個真有這個痛的人，上次為它實際掏過多少時間和錢。',
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
    ['name' => '國富論',    'path' => '/lens/the-wealth-of-nations'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
