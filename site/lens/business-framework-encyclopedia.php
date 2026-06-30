<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '七十張漂亮的框架圖，沒一張會替你去敲門：用痛點之尺重讀《解決問題的商業框架圖鑑》｜痛點 P.A.I.N.',
  'desc'  => '《解決問題的商業框架圖鑑》把七十個商業框架照解題流程編排，好查好上手。用痛點的眼光重讀：框架只幫你把腦袋裡的猜測排整齊，沒有一張會替你出門查那道題背後到底有沒有人在痛——填滿格子之前，先去敲那幾扇還沒敲的門。',
  'path'  => '/lens/business-framework-encyclopedia',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《解決問題的商業框架圖鑑》',
  'heading'   => '七十張漂亮的框架圖，沒一張會替你去敲門',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/business-framework-encyclopedia.html',
  'book'      => ['name' => '解決問題的商業框架圖鑑', 'author' => '小野義直、宮田匠'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把圖裡那幾格猜測，先驗成事實',
    'body'    => '《解決問題的商業框架圖鑑》幫你把想法排整齊；痛點這把尺，逼你在填滿格子之前，先確認那道題背後真有人在痛。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '解決問題的商業框架圖鑑',   'path' => '/lens/business-framework-encyclopedia'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
