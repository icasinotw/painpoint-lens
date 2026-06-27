<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '花大錢買的體驗，有些股息掛零：用痛點之尺重讀《別把你的錢留到死》｜痛點 P.A.I.N.',
  'desc'  => '《別把你的錢留到死》教你把錢換成體驗、領「記憶股息」，卻預設你早知道哪些體驗領得到息。用痛點的眼光重讀：每個體驗都是一張賭它會回本的單，先驗過自己的需求，再把錢砸下去。',
  'path'  => '/lens/die-with-zero',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《別把你的錢留到死》',
  'heading'   => '花大錢買的體驗，有些在你的回憶帳戶裡股息掛零',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/die-with-zero.html',
  'book'      => ['name' => '別把你的錢留到死：賺錢、花錢、存錢，最佳化人生與財富的9個思維', 'author' => 'Bill Perkins 比爾・柏金斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正想花大錢買的那個體驗，驗過需求了嗎？',
    'body'    => '柏金斯叫你別把錢留到死；《痛點》這把尺，幫你先確認那筆要花出去的錢，換得回一段你日後領得到的回憶。現在就免費體檢一個決定，五分鐘看出最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的決定'],
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
    ['name' => '別把你的錢留到死',  'path' => '/lens/die-with-zero'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
