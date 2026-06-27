<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把問題看得再深，也救不了一個沒人要的問題：用痛點之尺重讀《第五項修練》｜痛點 P.A.I.N.',
  'desc'  => '聖吉《第五項修練》的系統思考，是把一個問題解到根的頂級工具——但它整本書都預設「這問題該解」。用痛點之尺補上它跳過的那一格：動手解之前，先確認那個問題真的有人在痛。',
  'path'  => '/lens/the-fifth-discipline',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《第五項修練》',
  'heading'   => '把問題看得再深，也救不了一個沒人要的問題',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/the-fifth-discipline.html',
  'book'      => ['name' => '第五項修練', 'author' => 'Peter Senge 彼得·聖吉'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在用力解的那個問題，真的有人在痛嗎？',
    'body'    => '《第五項修練》教你把一個問題解到根；但動手之前，你得先確認這問題真的有人在痛。現在就免費體檢一個點子，五分鐘找出你最弱的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '第五項修練', 'path' => '/lens/the-fifth-discipline'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
