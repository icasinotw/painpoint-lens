<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子，練了兩年市場根本不考的題：用痛點之尺重讀《超速學習》｜痛點 P.A.I.N.',
  'desc'  => '史考特・楊一年自學完 MIT 四年課程，靠的是「直接學習」——只練真正要上場的那一招。用痛點之尺重讀《超速學習》：你說在學怎麼把生意做起來，可這兩年寫程式、改簡報、問朋友，沒一招長得像「陌生人掏錢」那一刻，全是市場不考的考古題。',
  'path'  => '/lens/ultralearning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《超速學習》',
  'heading'   => '你磨了兩年的，全是市場根本不考的題',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/ultralearning.html',
  'book'      => ['name' => '超速學習：我這樣做，一個月學會素描，一年學會四種語言，完成 MIT 四年課程(Ultralearning)', 'author' => 'Scott Young 史考特・楊'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，你真的「練」過它最該練的那一招嗎？',
    'body'    => '楊教你直奔真正要上場的那一刻；你那個點子真正要上場的，是一個陌生人掏錢的瞬間。趁還沒押上下一個兩年，先讓一個陌生人替它考一次試。',
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
    ['name' => '超速學習',  'path' => '/lens/ultralearning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
