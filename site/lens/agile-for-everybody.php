<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把敏捷跑成了一場漂亮的空轉:用痛點之尺重讀《全員敏捷》｜痛點 P.A.I.N.',
  'desc'  => '麥特・勒梅《全員敏捷》把敏捷收乾成三原則,第一條是「顧客擺第一」。用痛點的眼光重讀:很多團隊搬了敏捷「快速迭代」的形式,卻跳過「先確認有人要」的實質——用最高的效率,把一個沒人要的東西做得很完整。',
  'path'  => '/lens/agile-for-everybody',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《全員敏捷》',
  'heading'   => '你把敏捷跑成了一場漂亮的空轉',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/agile-for-everybody.html',
  'book'      => ['name' => '全員敏捷:使用敏捷的正確思維,打造快速、彈性、以顧客為中心的組織', 'author' => 'Matt LeMay 麥特・勒梅'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你們的衝刺跑得再快,有先確認過有人在等這個成果嗎?',
    'body'    => '《全員敏捷》把敏捷拉回「顧客擺第一」;搬到你的點子上,就是別讓漂亮的流程,替你跳過了「先確認有人要」這一步。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '全員敏捷',   'path' => '/lens/agile-for-everybody'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
