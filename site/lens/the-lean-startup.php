<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '它教你怎麼驗，卻沒說先驗哪一格：用痛點之尺拆《精實創業》｜痛點 P.A.I.N.',
  'desc'  => '《精實創業》給你「做小東西、看反應、學一件事」的驗證引擎，卻把「先驗哪一格」留給你自己。用 P.A.I.N. 四問替這套引擎排好順序：先確認有人在痛、痛到付錢，再去煩惱怎麼做、怎麼算。',
  'path'  => '/lens/the-lean-startup',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精實創業》',
  'heading'   => '它教你怎麼驗，卻沒說先驗哪一格',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/the-lean-startup.html',
  'book'      => ['name' => '精實創業（The Lean Startup）', 'author' => 'Eric Ries 艾瑞克・萊斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你在驗的，是會要你命的那一格嗎？',
    'body'    => '《精實創業》給你一套便宜的驗證引擎；《痛點》這把尺，幫你決定先把引擎對準哪一格——先確認真的有人在痛、在付錢，再往下做。現在就免費體檢一個點子，五分鐘看出你最弱、最該先驗的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '精實創業',    'path' => '/lens/the-lean-startup'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
