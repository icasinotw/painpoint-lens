<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你問來那一屋子的「讚」，達利歐一票都不會採計：用痛點之尺重讀《原則》｜痛點 P.A.I.N.',
  'desc'  => '《原則》裡達利歐替每個意見秤重——誰過去判斷準，誰那一票就重。用痛點的眼光重讀：你替「有人要」蒐集的證據其實也在秤重，卻把最不可信的親友點頭秤到最重。唯一可信的那一票，是一個真人真的把錢掏出來。',
  'path'  => '/lens/principles',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《原則》',
  'heading'   => '你問來那一屋子的「讚」，達利歐一票都不會採計',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/principles.html',
  'book'      => ['name' => '原則：生活和工作的應用', 'author' => 'Ray Dalio 瑞・達利歐'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那票「有人要」，是誰投的？',
    'body'    => '《原則》教你替每個意見秤重；《痛點》這把尺，幫你把蒐集到的「有人要」重秤一遍，分清哪些是零成本的客套、哪些才真的押了注。現在就免費體檢一個點子，五分鐘量出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '原則',      'path' => '/lens/principles'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
