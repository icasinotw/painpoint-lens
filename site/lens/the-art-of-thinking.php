<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《思考的技術》：你獨獨沒驗證的那個假設｜痛點 P.A.I.N.',
  'desc'  => '大前研一《思考的技術》教你一件事：別把腦袋第一個答案當結論，先當假設、帶去現場用事實驗。用痛點的眼光重讀：抱著點子的你把對手、定價、功能全驗過了，唯獨「一定有人要」這句沒查證就請上結論席——它偏偏是壓最重、卻最沒驗過的一格。',
  'path'  => '/lens/the-art-of-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《思考的技術》',
  'heading'   => '大前研一要你驗證每個假設，你卻獨獨放過了那句「一定有人要」',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-art-of-thinking.html',
  'book'      => ['name' => '思考的技術', 'author' => 'Kenichi Ohmae 大前研一'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上抱著一個你「一定有人要」的點子？',
    'body'    => '把那句「一定有人要」從結論席請下來，先當成假設，找一個真人用一筆錢驗驗看它撐不撐得住。',
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
    ['name' => '思考的技術',  'path' => '/lens/the-art-of-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
