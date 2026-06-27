<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '威爾許再難看的報表都敢翻，輪到你點子那一張，你卻別過了頭：用痛點之尺重讀《致勝》｜痛點 P.A.I.N.',
  'desc'  => '《致勝》整本書教的，是威爾許那套不逃避的本事：再難看的數字、再難開口的人事，他都敢盯著看。用痛點之尺重讀：他那雙不眨的眼睛，是從「生意已經開張」那條線才往下看的；輪到你手上的點子，最該翻開的那張報表——有幾個陌生人真的為它掏過錢——你卻一直別過頭。',
  'path'  => '/lens/winning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《致勝》',
  'heading'   => '威爾許再難看的報表都敢翻，輪到你點子那一張，你卻別過了頭',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/winning.html',
  'book'      => ['name' => '致勝', 'author' => '傑克・威爾許、蘇西・威爾許'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，最該翻開的那張報表還空著',
    'body'    => '《致勝》教你把一間公司經營到贏；先用《痛點》這把尺，確認那門生意裡到底有沒有人。免費體檢一個點子，五分鐘看出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '致勝',       'path' => '/lens/winning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
