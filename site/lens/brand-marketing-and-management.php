<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '這本書從第二步開始教，第一步它跳過了：用痛點之尺重讀《品牌行銷與管理》｜痛點 P.A.I.N.',
  'desc'  => '戴國良《品牌行銷與管理》把品牌經營的每個面向講得又全又貼台灣，卻是從你「已經有一個值得經營的品牌」那一刻才開機。用痛點之尺補上它跳過的第零章：先確認有人為你要解的痛真的在掏錢，再來轉這一整面旋鈕。',
  'path'  => '/lens/brand-marketing-and-management',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《品牌行銷與管理》',
  'heading'   => '這本書從第二步開始教，第一步它跳過了',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/brand-marketing-and-management.html',
  'book'      => ['name' => '品牌行銷與管理', 'author' => '戴國良'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你想經營的那個品牌，底下真的有人在等嗎？',
    'body'    => '挑你手上最想做大的一個品牌或產品，先別急著定位、設計識別，改做一件更前面的事：把它要解的那件事寫成一句話，去找三個已經在為這件事花錢的人，當面問他上個月花了多少。',
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
    ['name' => '品牌行銷與管理', 'path' => '/lens/brand-marketing-and-management'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
