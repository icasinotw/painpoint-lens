<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《和任何人都能愉快相處的科學》｜痛點 P.A.I.N.',
  'desc'  => '凡妮莎・范・愛德華茲把魅力拆成可練的科學：破冰、讀表情、讓人覺得被看見。用痛點的眼光重讀：這些招都在優化你怎麼被喜歡，卻沒逼你先確認——你想認識的那個人，到底想不想被你認識。',
  'path'  => '/lens/captivate',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《和任何人都能愉快相處的科學》',
  'heading'   => '再厲害的自我介紹，也換不來別人想認識你',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/captivate.html',
  'book'      => ['name' => '和任何人都能愉快相處的科學：迷人，其實有科學根據（Captivate）', 'author' => '凡妮莎・范・愛德華茲（Vanessa Van Edwards）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你走進一個場子前，在心裡排練什麼',
    'body'    => '范・愛德華茲教你把魅力拆成可練的動作；但被人想認識是一種需求，光把自己這一端打磨亮生不出來。下次開口前，先用一個問題探探對方在乎什麼，再決定要端出哪一個自己。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                          'path' => '/'],
    ['name' => '痛點之尺',                       'path' => '/lens'],
    ['name' => '和任何人都能愉快相處的科學',       'path' => '/lens/captivate'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
