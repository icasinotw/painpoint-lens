<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '情緒推你動手前，先算清底下那筆帳：用痛點之尺重讀《情緒賽局》｜痛點 P.A.I.N.',
  'desc'  => '溫特是賽局理論家，卻寫《情緒賽局》替情緒平反：憤怒、恐懼、信任常常是進化算好的划算解，不是理性的敵人。用痛點的眼光重讀——他證明了某些情緒整體上划算，卻沒教你臨場分辨手上這一股。動手前，先算它底下有沒有一筆你付得清、換得回的帳。',
  'path'  => '/lens/feeling-smart',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《情緒賽局》',
  'heading'   => '情緒推你動手前，先算清底下那筆帳',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/feeling-smart.html',
  'book'      => ['name' => '情緒賽局', 'author' => 'Eyal Winter 艾雅爾·溫特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先替那股情緒對一次帳，再決定動不動手',
    'body'    => '溫特證明了很多情緒是進化算好的划算解；痛點這把尺，把同一個動作用在你此刻的當下——別讓一股感覺糊成「應該這樣」，先把它底下那筆代價一項一項算清楚，再決定放不放手。',
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
    ['name' => '情緒賽局', 'path' => '/lens/feeling-smart'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
