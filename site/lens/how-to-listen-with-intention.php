<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你以為在聽客戶，其實在等他認同：用痛點之尺重讀《最高的聆聽》｜痛點 P.A.I.N.',
  'desc'  => '派翠克・金《最高的聆聽》指認出一種「假聽」：你嘴上在問，心裡只在等對方講出你想聽的答案。用痛點的眼光重讀，這正是創業者做用戶訪談時最常犯的錯——你不是在驗證，你在找認同。',
  'path'  => '/lens/how-to-listen-with-intention',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《最高的聆聽》',
  'heading'   => '你以為在聽客戶，其實在等他認同',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/how-to-listen-with-intention.html',
  'book'      => ['name' => '最高的聆聽', 'author' => 'Patrick King 派翠克・金'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你在聽客戶，還是在等他認同你想好的答案？',
    'body'    => '《最高的聆聽》教你把嘴閉上、真的聽見對方；痛點這把尺，把同一個動作用到你的點子上——先聽見有沒有人真的在痛，再動手做。',
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
    ['name' => '最高的聆聽', 'path' => '/lens/how-to-listen-with-intention'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
