<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '台積電贏的那一手，是看準一個沒人服務的痛：用痛點之尺重讀《張忠謀自傳（下冊）》｜痛點 P.A.I.N.',
  'desc'  => '張忠謀自傳下冊，常被讀成一個天才的故事。但用《痛點》的眼光重讀，台積電其實是一場規模大到嚇人的需求驗證：他先看準一群設計晶片的人被「信不過」卡死在原地，才回頭蓋下那座只代工、永不跟客戶競爭的工廠，用一句承諾把最深的那道摩擦整個搬開。一門大生意的起點，往往就藏在一個沒人肯替別人解的痛裡。',
  'path'  => '/lens/morris-chang-autobiography',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《張忠謀自傳（下冊）》',
  'heading'   => '台積電贏的那一手，是看準一個沒人服務的痛',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/morris-chang-autobiography.html',
  'book'      => ['name' => '張忠謀自傳（下冊）', 'author' => '張忠謀'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，卡住客戶的是哪道坎？',
    'body'    => '別急著問人想不想要。先找出他們明明想要、卻遲遲不敢點頭的那道顧慮——能把它寫清楚、再想出一個動作搬開它，你才算真的摸到生意的門。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '張忠謀自傳（下冊）',       'path' => '/lens/morris-chang-autobiography'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
