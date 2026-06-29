<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '稻盛說定價即經營，定的其實是客戶的痛：用痛點之尺重讀《經營12條》｜痛點 P.A.I.N.',
  'desc'  => '稻盛和夫《經營12條》把幾十年的經營收成12條鐵律，其中十一條都在練經營者對自己的火——願望、努力、鬥魂、樂觀，只有第六條「定價即經營」把你推到客戶面前。用《痛點》的眼光重讀，會看見定價的本質：替客戶的痛標一個明確的數字。努力是放大器，先確認外面有人在痛，再把火開到最大。附一個這週就能做的開價練習。',
  'path'  => '/lens/the-twelve-management-principles',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《經營12條》',
  'heading'   => '稻盛說定價即經營，定的其實是客戶的痛',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-twelve-management-principles.html',
  'book'      => ['name' => '經營12條', 'author' => '稻盛和夫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個賣得太便宜的東西，痛點到底有多深？',
    'body'    => '稻盛要老闆親自定價，因為價格量的是客戶的痛有多真。先別急著加倍努力，回頭確認一件事：門外那個痛，真的值你開的這個價嗎？',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '經營12條',             'path' => '/lens/the-twelve-management-principles'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
