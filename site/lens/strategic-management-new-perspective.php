<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '策略形態畫到完整，客戶那一格得自己出門補：用痛點之尺重讀《策略管理新論》｜痛點 P.A.I.N.',
  'desc'  => '司徒達賢《策略管理新論》用「策略形態分析法」把策略拆成六個能攤開來量的構面，逼你把含糊的雄心落成具體選擇。用痛點之尺重讀：形態圖檢查的是六個構面自己搭不搭，「目標市場」那一格你寫得再精準，也只是被寫成事實的假設——那群人在不在痛、會不會付錢，得自己走出門去確認。',
  'path'  => '/lens/strategic-management-new-perspective',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《策略管理新論》',
  'heading'   => '策略形態畫到完整，客戶那一格得自己出門補',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/strategic-management-new-perspective.html',
  'book'      => ['name' => '策略管理新論', 'author' => '司徒達賢'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在把六個構面填滿之前，先確認「目標市場」那一格是真的',
    'body'    => '司徒達賢教你把策略畫成一張內部相互配合的形態圖；痛點之尺幫你補上圖裡驗不到的那一格——你寫下的那群目標客戶，此刻真的有人在為這件事掏錢嗎？先確認有人要，再回頭讓六個構面彼此配合。',
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
    ['name' => '策略管理新論', 'path' => '/lens/strategic-management-new-perspective'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
