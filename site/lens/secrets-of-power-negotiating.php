<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那句「一定有人要」，是你腦袋開給你的第一次出價｜痛點 P.A.I.N.',
  'desc'  => '道森《優勢談判》的鐵律是「絕不接受第一次出價」——對第一口價先大吃一驚、逼它加碼。用痛點的眼光重讀：你腦中那句「一定有人要」，正是你想都沒想就接受的第一次出價；逼它拿出唯一算數的籌碼——一個陌生人的真錢。',
  'path'  => '/lens/secrets-of-power-negotiating',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《優勢談判》',
  'heading'   => '那句「一定有人要」，是你腦袋開給你的第一次出價',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/secrets-of-power-negotiating.html',
  'book'      => ['name' => '優勢談判', 'author' => 'Roger Dawson 羅傑・道森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你腦中那口「一定有人要」，拿得出真籌碼嗎？',
    'body'    => '道森教你絕不接受對方的第一次出價；《痛點》這把尺，幫你拆穿自己開給自己的那一口。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '優勢談判',  'path' => '/lens/secrets-of-power-negotiating'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
