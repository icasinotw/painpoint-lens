<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '設計這些App的人，自己不讓小孩碰：用痛點之尺重讀《欲罷不能》｜痛點 P.A.I.N.',
  'desc'  => '奧特在《欲罷不能》開頭點名：做出最讓人上癮產品的那群人，回家卻把同樣的東西擋在自家小孩門外。手機、社群、遊戲怎麼被設計成戒不掉？變動獎賞、滑不到底的動態、被偷偷收走的「喊停訊號」。用痛點的眼光重讀：這是一面照向「做產品的人」的鏡子——你打造的，是真能解一個痛的東西，還是一個讓人放不下、卻什麼也沒解決的鉤子？',
  'path'  => '/lens/irresistible',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《欲罷不能》',
  'heading'   => '設計這些App的人，自己不讓小孩碰',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/irresistible.html',
  'book'      => ['name' => '欲罷不能', 'author' => 'Adam Alter（亞當・奧特）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你做的產品，是在解痛還是裝鉤子？',
    'body'    => '把你正在做的東西從使用者手上拿走一個禮拜，他的日子會真的變難過，還是其實沒少什麼？想清楚這一題，再決定要不要繼續往下做。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '欲罷不能',    'path' => '/lens/irresistible'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
