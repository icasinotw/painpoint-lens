<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《簡報女王的故事力》｜痛點 P.A.I.N.',
  'desc'  => '南西・杜爾特把好簡報拆成一條在「現在的處境」與「可以變成的樣子」之間擺盪的故事線。用痛點的眼光重讀：這條線推得動人，全靠台下心裡本來就有的那道缺口——你能把它照亮，卻沒辦法靠技巧現場灌進去。上台前先驗的，是那道缺口到底是不是台下帶進來的。',
  'path'  => '/lens/resonate',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《簡報女王的故事力》',
  'heading'   => '台下還沒覺得卡，再好的簡報都推不動',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/resonate.html',
  'book'      => ['name' => '簡報女王的故事力（Resonate: Present Visual Stories that Transform Audiences）', 'author' => '南西・杜爾特（Nancy Duarte）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '下次上台前，你第一個打開的是什麼',
    'body'    => '杜爾特教你把簡報排成一條打動人的故事線；但能不能打動，先取決於台下那道缺口是不是本來就在。先別開投影片軟體，先用台下的話寫下他們此刻卡在哪，再決定要把他們帶去哪裡。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '簡報女王的故事力',          'path' => '/lens/resonate'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
