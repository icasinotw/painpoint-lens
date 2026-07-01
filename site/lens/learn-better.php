<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的課越報越多，那個痛卻原封不動：用痛點之尺重讀《學得更好》｜痛點 P.A.I.N.',
  'desc'  => '《學得更好》把學習拆成六步，第一步不是背也不是練，是先替這件事找到一個對你成立的理由。用痛點的眼光看：這一步等於逼你對自己的學習做一次需求驗證——你報的課，是在解一個正在痛的問題，還是只買一個安心？',
  'path'  => '/lens/learn-better',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《學得更好》',
  'heading'   => '你的課越報越多，那個痛卻原封不動',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/learn-better.html',
  'book'      => ['name' => '學得更好：成功不是天賦，是方法。讓學習更有效的六個關鍵', 'author' => 'Ulrich Boser（烏瑞克・鮑澤）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '學之前，先確認那個痛是真的',
    'body'    => '《學得更好》的第一步，是替一件事找到對你成立的理由；痛點之尺把同一個動作，變成一條你能反覆自問的紀律：這件事，真的有個痛在後面推我嗎？',
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
    ['name' => '學得更好',  'path' => '/lens/learn-better'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
