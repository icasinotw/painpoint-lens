<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '量得出落差，不代表那道落差值得填：用痛點之尺重讀《解決問題》｜痛點 P.A.I.N.',
  'desc'  => '高田貴久、岩澤智之《解決問題》教你動手前先把問題量出來，照 WHERE→WHY→HOW 的順序解題。用痛點的眼光重讀：這套紀律其實是對「問題」做需求驗證，卻停在公司門內——它把你指定的那道題解到極致，卻不問那道落差背後，外面是不是真有人在痛。',
  'path'  => '/lens/solving-problems',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《解決問題》',
  'heading'   => '量得出落差，不代表那道落差值得填',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/solving-problems.html',
  'book'      => ['name' => '解決問題', 'author' => '高田貴久、岩澤智之'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在解一道題之前，先確認它值不值得解',
    'body'    => '《解決問題》教你把問題量得清清楚楚；接著往下讀幾篇拆書，練的是動手前那一下停頓——先看清痛在哪、是不是真有人在痛。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '解決問題',       'path' => '/lens/solving-problems'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
