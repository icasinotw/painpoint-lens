<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '替你那個「還可以」的點子，做一次留任測試：用痛點之尺重讀《給力》｜痛點 P.A.I.N.',
  'desc'  => '《給力》用一道「留任測試」逼主管對人講真話：這個人若要走，你會不會拚命留？用痛點之尺重讀：你對員工狠得起來，卻沒對自己那個「還可以」的點子做過同一道測試——能不能留，該由願不願意掏錢的市場來打分。',
  'path'  => '/lens/powerful',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《給力》',
  'heading'   => '替你那個「還可以」的點子，做一次留任測試',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/powerful.html',
  'book'      => ['name' => '給力:矽谷有史以來最重要文件', 'author' => 'Patty McCord 派蒂・麥寇德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，做過留任測試了嗎？',
    'body'    => '《給力》教你對人誠實到底；《痛點》這把尺，幫你把同一份誠實，轉向你手上那個點子。現在就免費體檢一個點子，五分鐘看出「有沒有人真的要」這一軸有多弱；或翻翻《痛點》電子書。',
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
    ['name' => '給力', 'path' => '/lens/powerful'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
