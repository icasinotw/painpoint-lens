<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '廣告教父能賣掉任何東西，卻第一個叫你別急著打廣告｜痛點 P.A.I.N.',
  'desc'  => '廣告教父奧格威能靠一個眼罩賣翻一件襯衫，卻留下一句話：再好的廣告，也只會讓一個沒人要的東西死得更快。用痛點之尺重讀《廣告教父的自白》——廣告是放大器、不是發電機，你那個賣不動的點子，缺的多半不是行銷，是還沒有人真的要。',
  'path'  => '/lens/confessions-of-an-advertising-man',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《廣告教父的自白》',
  'heading'   => '廣告教父能賣掉任何東西，卻第一個叫你別急著打廣告',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/confessions-of-an-advertising-man.html',
  'book'      => ['name' => '廣告教父的自白', 'author' => 'David Ogilvy 大衛・奧格威'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在替點子砸廣告之前，先確認有沒有人要',
    'body'    => '奧格威說再好的廣告也只會讓爛東西死得更快；《痛點》這把尺，逼你先問那句被你繞開的——有沒有真人為它付過錢。現在就免費體檢一個點子，五分鐘看出最空的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '廣告教父的自白', 'path' => '/lens/confessions-of-an-advertising-man'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
