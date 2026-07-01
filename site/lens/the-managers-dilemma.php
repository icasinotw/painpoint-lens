<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '兩難選不下去，多半是有一邊你不敢算：用痛點之尺重讀《主管的兩難抉擇》｜痛點 P.A.I.N.',
  'desc'  => '何飛鵬《主管的兩難抉擇》要主管認一件事：多數兩難沒有兩全其美，選了都會有人痛。用痛點之尺重讀：你之所以卡在原地，多半不是不夠果斷，是有一邊的代價你偷偷沒算——把它換算成一個能心算的數字，假兩難常常會自己塌掉一半，剩下真正的兩難，才輪到「認帳」上場。',
  'path'  => '/lens/the-managers-dilemma',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《主管的兩難抉擇》',
  'heading'   => '兩難選不下去，多半是有一邊你不敢算',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-managers-dilemma.html',
  'book'      => ['name' => '主管的兩難抉擇', 'author' => '何飛鵬'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個兩難，算過帳了嗎？',
    'body'    => '《主管的兩難抉擇》教你為選擇認帳；痛點之尺再往前一步——先把那筆你一直繞著走的代價，換算成一個能心算的數字。多讀幾篇拆書，練這雙把「感覺」換成「帳」的眼睛。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
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
    ['name' => '主管的兩難抉擇',   'path' => '/lens/the-managers-dilemma'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
