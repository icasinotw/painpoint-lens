<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '願景越大，越沒人記得問有沒有人要：用痛點之尺重讀《AI霸主》｜痛點 P.A.I.N.',
  'desc'  => '帕米・奧森《AI霸主》寫兩個想用 AI 拯救全人類的天才，最後把技術交給了 Google 與微軟。用痛點之尺補上書沒逼你回答的那一格——再偉大的願景，也代替不了「到底有沒有人在痛」。',
  'path'  => '/lens/supremacy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《AI霸主》',
  'heading'   => '願景越大，越沒人記得問有沒有人要',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/supremacy.html',
  'book'      => ['name' => 'AI霸主', 'author' => '帕米・奧森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '願景再大，也得先有人在痛',
    'body'    => '在把點子做大、講得更動聽之前，先花五分鐘，把「到底有誰在痛、痛到願意付錢」一格一格驗過一遍。',
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
    ['name' => 'AI霸主', 'path' => '/lens/supremacy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
