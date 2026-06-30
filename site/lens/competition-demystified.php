<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '策略只有一題：別人能不能輕鬆搶走你的客人｜痛點 P.A.I.N.',
  'desc'  => '價值投資大師格林沃德把波特的五力分析砍到只剩一題：有沒有進入障礙？用痛點的眼光重讀《價值投資大師眼中的商業賽局》——這把護城河之尺極利，卻是從「你已經有人在付錢」那一刻才開始量的。',
  'path'  => '/lens/competition-demystified',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《價值投資大師眼中的商業賽局》',
  'heading'   => '策略只有一題：別人能不能輕鬆搶走你的客人',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/competition-demystified.html',
  'book'      => ['name' => '價值投資大師眼中的商業賽局', 'author' => 'Bruce Greenwald 布魯斯・格林沃德、Judd Kahn 裘德・康恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '護城河之前，先確認城裡有人',
    'body'    => '格林沃德教你判斷一門生意守不守得住；痛點之尺幫你回答更前面那題——這塊地上，到底有沒有人在痛、痛到願意付錢。',
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
    ['name' => '價值投資大師眼中的商業賽局', 'path' => '/lens/competition-demystified'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
