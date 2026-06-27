<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '白帽要你只講事實，而你那個點子的事實只有一個｜痛點 P.A.I.N.',
  'desc'  => '《六頂思考帽》最咬死的一條規矩是：別把紅帽（感覺）當成白帽（事實）。可你替自己的創業點子，戴最久的是黃帽、最該戴的白帽一次都沒戴。用痛點之尺重講狄波諾：你那個點子的白帽事實，到現在只有一格，還是空的。',
  'path'  => '/lens/six-thinking-hats',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《六頂思考帽》',
  'heading'   => '白帽要你只講事實，而你那個點子的事實只有一個',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/six-thinking-hats.html',
  'book'      => ['name' => '六頂思考帽（全新修訂版）', 'author' => 'Edward de Bono 愛德華・狄波諾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子的白帽欄位，到底空成什麼樣？',
    'body'    => '《六頂思考帽》要你別把感覺當事實；《痛點》這把尺，幫你看清你那個點子最空、最該先補的是哪一格。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '六頂思考帽',  'path' => '/lens/six-thinking-hats'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
