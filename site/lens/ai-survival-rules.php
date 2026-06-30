<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => 'AI 把你給它的東西放大，值不值得放大是你的事：用痛點之尺重讀《AI世界的底層邏輯與生存法則》｜痛點 P.A.I.N.',
  'desc'  => '程世嘉把 AI 的底層邏輯講白：它是一台會放大的機率機器。用痛點之尺補上它沒逼你回答的那一題——放大是中性的，你瞄準的那個痛，原本到底有沒有人在痛。',
  'path'  => '/lens/ai-survival-rules',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《AI世界的底層邏輯與生存法則》',
  'heading'   => 'AI 把你給它的東西放大，值不值得放大是你的事',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/ai-survival-rules.html',
  'book'      => ['name' => 'AI世界的底層邏輯與生存法則', 'author' => '程世嘉'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在把點子交給 AI 放大之前，先確認它撐得住',
    'body'    => 'AI 會把你瞄準的東西放大，卻不替你確認那裡有沒有人在痛。動手放大之前，先花五分鐘，把這個點子一格一格驗過一遍。',
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
    ['name' => 'AI世界的底層邏輯與生存法則', 'path' => '/lens/ai-survival-rules'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
