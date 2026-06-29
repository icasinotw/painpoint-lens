<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '目標可以鬼速達成，前提是它值得達成：用痛點之尺重讀《鬼速PDCA工作術》｜痛點 P.A.I.N.',
  'desc'  => '《鬼速PDCA工作術》要你把PDCA快到以天、以週為單位轉，把大目標拆到今晚就能打勾。用痛點的眼光重讀：這台引擎厲害在執行，C那一格卻從不查「這目標到底有沒有人要」——把它的因數分解和KDI調轉去驗證假設，兩週就能知道答案。',
  'path'  => '/lens/oni-soku-pdca',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《鬼速PDCA工作術》',
  'heading'   => '目標可以鬼速達成，前提是它值得達成',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/oni-soku-pdca.html',
  'book'      => ['name' => '鬼速PDCA工作術', 'author' => '冨田和成'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先驗有沒有人要，再鬼速地做',
    'body'    => '鬼速PDCA把執行的速度練到極致，卻沒逼你回答一句：這個目標到底有沒有人要？同一套因數分解，也能拿來對準你的點子——先確認痛在哪、值多少，再決定要不要鬼速地動手。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '鬼速PDCA工作術',   'path' => '/lens/oni-soku-pdca'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
