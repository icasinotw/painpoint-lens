<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '客戶為什麼買，你其實一直在用猜的｜痛點 P.A.I.N.',
  'desc'  => '《一切都是誘因的問題！》的葛尼奇與李斯特，是少數親自下田做實驗的經濟學家——他們證明，誘因放到活人面前常常往你沒料到的方向跑，而那個「為什麼」用想的、用問卷都問不出來。把這雙眼睛轉向你的點子：你最有把握的那個誘因，正是你從沒驗過的，先留一群人別碰，當你的對照組。',
  'path'  => '/lens/the-why-axis',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一切都是誘因的問題！》',
  'heading'   => '客戶為什麼買，你其實一直在用猜的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-why-axis.html',
  'book'      => ['name' => '一切都是誘因的問題！', 'author' => 'Uri Gneezy 尤里・葛尼奇、John List 約翰・李斯特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最有把握的那個誘因，驗過了嗎',
    'body'    => '葛尼奇和李斯特教你別只盯著數字，去設一個對照組問出「為什麼」；同一個動作，你那個還沒被任何人驗過的點子，更該先被問一次。',
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
    ['name' => '一切都是誘因的問題！', 'path' => '/lens/the-why-axis'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
