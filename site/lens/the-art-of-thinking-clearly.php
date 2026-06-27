<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '杜伯里教你抓出腦袋裡的五十二個錯，最貴的那一個躲在你的點子裡｜痛點 P.A.I.N.',
  'desc'  => '杜伯里《思考的藝術》把五十二種思考錯誤編成隨身手冊，教你揪出新聞、廣告和別人的決策盲點。用痛點之尺重讀：它能破遍全世界的案，卻破不了你自己那樁——你那句「一定有人要」，正是倖存者偏誤、確認偏誤與游泳選手身材錯覺疊出來的成品。',
  'path'  => '/lens/the-art-of-thinking-clearly',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《思考的藝術》',
  'heading'   => '杜伯里教你抓出腦袋裡的五十二個錯，最貴的那一個躲在你的點子裡',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-art-of-thinking-clearly.html',
  'book'      => ['name' => '思考的藝術：52個非受迫性思考錯誤（Die Kunst des klaren Denkens）', 'author' => 'Rolf Dobelli 魯爾夫・杜伯里'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，是查證過的，還是你最捨不得拆穿的劇本？',
    'body'    => '杜伯里教你揪出別人腦袋裡的坑；《痛點》這把尺，幫你揪出此刻正在你自己點子上運作的那一個。現在就免費體檢一個點子，五分鐘看清你最篤定的那一格是不是還空著；或翻翻《痛點》電子書。',
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
    ['name' => '思考的藝術',  'path' => '/lens/the-art-of-thinking-clearly'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
