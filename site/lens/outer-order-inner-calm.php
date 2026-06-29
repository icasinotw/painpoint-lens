<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把桌面收乾淨的踏實感，最會騙做點子的人：用痛點之尺重讀《理想生活的起點》｜痛點 P.A.I.N.',
  'desc'  => '葛瑞琴・魯賓寫了整本書教你整理，卻老實招認：整理常常是拿來逃避真正難題的安全動作。用痛點的眼光重讀《理想生活的起點》：你忙著做功能、改 logo、修簡報，那種「我在前進」的爽，跟清空一張桌子是同一種——它讓你一整年沒去問那句要命的：到今天，到底有沒有人為這件事掏過錢？這禮拜，在每件事旁邊老實標一個字：整理，還是驗證？',
  'path'  => '/lens/outer-order-inner-calm',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《理想生活的起點》',
  'heading'   => '把桌面收乾淨的踏實感，最會騙做點子的人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/outer-order-inner-calm.html',
  'book'      => ['name' => '理想生活的起點', 'author' => '葛瑞琴・魯賓（Gretchen Rubin）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你忙著整理的時候，那句「有沒有人要」是不是又躲過了一天？',
    'body'    => '別急著再做一個功能、再修一版簡報，先逼自己用最白的話問一句：到今天為止，有沒有人真的為這件事掏過錢？答得出來，你才算真的在驗它。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '理想生活的起點', 'path' => '/lens/outer-order-inner-calm'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
