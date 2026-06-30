<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把客戶簡化成一個名詞，你就看不見他的痛了：用痛點之尺重讀《鉅變》｜痛點 P.A.I.N.',
  'desc'  => '博蘭尼的《鉅變》證明「會自己運轉的市場」從不存在，它把人當成「虛擬商品」來算，代價全落在活人身上。用痛點的眼光重讀——你把客戶壓成試算表上一個不會痛的名詞時，做的是同一件縮小版的事；而被你省略的那個痛，會用雙向運動回頭算帳。',
  'path'  => '/lens/the-great-transformation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《鉅變》',
  'heading'   => '把客戶簡化成一個名詞，你就看不見他的痛了',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-great-transformation.html',
  'book'      => ['name' => '鉅變：當代政治、經濟的起源', 'author' => '卡爾・博蘭尼（Karl Polanyi）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把計畫裡那個乾淨的名詞，還原成一個會痛的人',
    'body'    => '《鉅變》證明任何看似會自己運轉的系統，背後都有人在默默付代價；痛點這把尺，只逼你把一句含混的「市場有需求」，攤到一個真人面前再聽一次。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '鉅變',        'path' => '/lens/the-great-transformation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
