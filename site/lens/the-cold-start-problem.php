<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先把一個小房間點亮，別急著推給全世界：用痛點之尺重讀《網路效應》｜痛點 P.A.I.N.',
  'desc'  => '安德魯・陳的《網路效應》把一件事講透：有一種產品你做得再好，裡面沒有別人就趨近於零。他開的藥方叫「原子網路」——別想著服務全世界，先湊出一小群剛好能自己轉起來的人。用痛點的眼光重讀：別只問一個人要不要，要問有沒有一整個最小的房間，願意同時為這東西現身——而且先搞定會被晾到最後的那一邊。',
  'path'  => '/lens/the-cold-start-problem',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《網路效應》',
  'heading'   => '先把一個小房間點亮，別急著推給全世界',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-cold-start-problem.html',
  'book'      => ['name' => '網路效應', 'author' => 'Andrew Chen 安德魯・陳'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，撐得住空房間嗎？',
    'body'    => '把你最想做的那個東西想一遍：它得有別人在裡面才有用，還是一個人用也成立？要是得靠別人，先別急著加功能，先找出那一小群你能讓他們這禮拜同時現身的人。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '網路效應',     'path' => '/lens/the-cold-start-problem'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
