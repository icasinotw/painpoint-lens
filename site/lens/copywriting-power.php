<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '在乎一個人，跟真的去問他，差一通電話：用痛點之尺重讀《文案力》｜痛點 P.A.I.N.',
  'desc'  => '盧建彰《文案力》難得地從「先看見那個人」開始寫文案，幾乎走到痛點之尺的第一步。但他把「在乎」寫得太像才氣——用 P.A.I.N. 補一刀：在乎不能只用感受的，得去問真人才驗得了。',
  'path'  => '/lens/copywriting-power',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《文案力》',
  'heading'   => '在乎一個人，跟真的去問他，差一通電話',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/copywriting-power.html',
  'book'      => ['name' => '文案力：如果不能打動人，千萬不要打擾人', 'author' => '盧建彰'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你以為你懂那個讀者，你問過他嗎？',
    'body'    => '盧建彰要你在乎讀的人；痛點之尺再多問一句：你那份在乎，去找真人驗過嗎？五分鐘把心裡那個讀者，跟真實的那個人對一次。',
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
    ['name' => '文案力',    'path' => '/lens/copywriting-power'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
