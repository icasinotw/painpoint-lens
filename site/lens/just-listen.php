<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先聽到他在痛什麼，你的話才進得去：用痛點之尺重讀《先傾聽就能說服任何人》｜痛點 P.A.I.N.',
  'desc'  => '《先傾聽就能說服任何人》教你說服前，先讓對方感到被理解。用痛點的眼光重讀：說服一個人，就是一對一的需求驗證——先聽到他在哪裡痛，你的話才推得動他。',
  'path'  => '/lens/just-listen',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《先傾聽就能說服任何人》',
  'heading'   => '先聽到他在痛什麼，你的話才進得去',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/just-listen.html',
  'book'      => ['name' => '先傾聽就能說服任何人', 'author' => 'Mark Goulston 馬克・葛斯登'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '聽懂一個人，跟驗證一門生意，是同一個動作',
    'body'    => '先確認對方真的在痛、痛在哪，你的話、你的產品才動得了他。差別只在尺寸——一個是一場對話，一個是一個市場。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
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
    ['name' => '先傾聽就能說服任何人',  'path' => '/lens/just-listen'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
