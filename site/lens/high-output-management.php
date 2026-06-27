<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一個鐘頭撬得動一整年，你打算撬哪一件：用痛點之尺重讀《葛洛夫給經理人的第一課》｜痛點 P.A.I.N.',
  'desc'  => '葛洛夫《高產出管理》教你把一個鐘頭的「槓桿」放到最大——同樣時間，撬得動一整年。但他整本書坐在英特爾，預設你產出的東西本來就有人要。用《痛點》的眼光重讀：對一個還沒半個客人的點子，槓桿最大的那個鐘頭，是先確認外面真的有人在等。',
  'path'  => '/lens/high-output-management',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《葛洛夫給經理人的第一課》',
  'heading'   => '一個鐘頭撬得動一整年，你打算撬哪一件',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/high-output-management.html',
  'book'      => ['name' => '葛洛夫給經理人的第一課', 'author' => 'Andrew Grove 安迪・葛洛夫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你花最多鐘頭的那件事，撬的東西有人要嗎？',
    'body'    => '《葛洛夫給經理人的第一課》幫你把每一個鐘頭的槓桿放到最大；《痛點》這把尺，幫你往前再追一刀——你撬的那一頭，外面到底有沒有人在痛、有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',                        'path' => '/'],
    ['name' => '痛點之尺',                     'path' => '/lens'],
    ['name' => '葛洛夫給經理人的第一課',        'path' => '/lens/high-output-management'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
