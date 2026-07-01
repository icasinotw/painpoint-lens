<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '升遷機票的背面，印著你沒讀的帳單：用痛點之尺重讀《上位思維》｜痛點 P.A.I.N.',
  'desc'  => '亞當·布萊安特訪過六百多位執行長寫成《上位思維》，戳破一個真相：升遷不是同一架飛機的好位子，是飛往陌生國度的另一架班機。用痛點的眼光重讀——多數人只讀升遷正面那張漂亮劇本，先把背面的帳單念一遍、確認你要的是工作不是頭銜，再決定上不上飛機。',
  'path'  => '/lens/the-leap-to-leader',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《上位思維》',
  'heading'   => '升遷機票的背面，印著你沒讀的帳單',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-leap-to-leader.html',
  'book'      => ['name' => '上位思維', 'author' => 'Adam Bryant 亞當·布萊安特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先把那張帳單念完，再決定跳不跳',
    'body'    => '布萊安特要你在起跳前，先看清那個更高的位子其實是一份陌生的新工作；痛點這把尺，把同一個動作用在你身上——別只讀升遷正面的漂亮劇本，先把背面的代價一項一項算清楚。',
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
    ['name' => '上位思維', 'path' => '/lens/the-leap-to-leader'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
