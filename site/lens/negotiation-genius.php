<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '談判桌上有力量的，是隨時走得掉的那個人：用痛點之尺重讀《哈佛商學院的雙贏談判課》',
  'desc'  => '馬哈特拉和貝澤曼用 BATNA 告訴你，談判桌上的力量全看誰更走得開。用痛點之尺重讀《哈佛商學院的雙贏談判課》：你那個點子要說服的客戶，退路是「繼續照原樣過」、走了毫髮無傷，而押上一兩年的你卻輸不起——最弱的位子上，坐的是你。',
  'path'  => '/lens/negotiation-genius',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《哈佛商學院的雙贏談判課》',
  'heading'   => '談判桌上輸不起的那個人，從頭到尾是你',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/negotiation-genius.html',
  'book'      => ['name' => '哈佛商學院的雙贏談判課(Negotiation Genius)', 'author' => 'Deepak Malhotra 狄帕克・馬哈特拉、Max Bazerman 麥斯・貝澤曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，你算過客戶「不買你」那條退路有多好走嗎？',
    'body'    => '你那個點子最該估的，是客戶「繼續照原樣過」那條退路——它要是太好走，這場仗從頭就沒得打。趁押上下一個一兩年之前，先把它戳出來。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '哈佛商學院的雙贏談判課', 'path' => '/lens/negotiation-genius'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
