<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '客戶只會叫你把現在這盞燈，做得更亮｜痛點 P.A.I.N.',
  'desc'  => '維甘提《設計力創新》說創新有兩根軸：技術，和「意義」——這東西對人來說是拿來幹嘛的。用痛點的眼光重讀：先問先驗解得了已知的痛，卻問不出一個全新的意義，這本書剛好把那條界線畫給你看。',
  'path'  => '/lens/design-driven-innovation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《設計力創新》',
  'heading'   => '客戶只會叫你把現在這盞燈，做得更亮',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/design-driven-innovation.html',
  'book'      => ['name' => '設計力創新（新版）', 'author' => 'Roberto Verganti 羅伯托・維甘提'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個產品，還能是別人生活裡的什麼？',
    'body'    => '維甘提教你在技術和貼近客戶之外，還有第三條路——改「意義」。問客戶只問得到現在這件事的加強版；新的意義，得你自己抬頭去看。',
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
    ['name' => '設計力創新',  'path' => '/lens/design-driven-innovation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
