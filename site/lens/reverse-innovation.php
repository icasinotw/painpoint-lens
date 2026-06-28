<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '連門口那位真客戶，你都還沒去敲過門：用痛點之尺重讀《逆向創新》｜痛點 P.A.I.N.',
  'desc'  => '《逆向創新》教跨國巨人別把暢銷品削一削就外銷，要搬到當地、從零認識真客戶。用痛點的眼光重讀：你那個點子，正在自己的同溫層裡做同一件事——假設遠方有人要，卻從沒去敲過門。',
  'path'  => '/lens/reverse-innovation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《逆向創新》',
  'heading'   => '連門口那位真客戶，你都還沒去敲過門',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/reverse-innovation.html',
  'book'      => ['name' => '逆向創新（Reverse Innovation）', 'author' => 'Vijay Govindarajan 維傑・高文達拉簡、Chris Trimble'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，卻還沒搬到真客戶面前待過？',
    'body'    => '《逆向創新》教大公司別在總部憑空想像市場；先去確認你那個點子真正想服務的人，到底在不在痛、痛在哪，再決定要不要繼續做下去。',
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
    ['name' => '逆向創新',  'path' => '/lens/reverse-innovation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
