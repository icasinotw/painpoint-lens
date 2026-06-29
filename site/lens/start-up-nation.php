<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '以色列盛產敢衝的人,客戶還是得你自己找:用痛點之尺重讀《創業之國以色列》｜痛點 P.A.I.N.',
  'desc'  => '席諾與辛格用 chutzpah、軍隊、移民、Yozma 基金,解釋以色列為什麼能量產創業家。但這整套答案講的全是「供給端」——怎麼把人變得更敢、更會做。用痛點的眼光重讀:膽量是練得出來的,池子裡有沒有水卻不歸它管;在你用以色列式的猛勁衝出去之前,先去開「有沒有人要」那一格。',
  'path'  => '/lens/start-up-nation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《創業之國以色列》',
  'heading'   => '以色列盛產敢衝的人,客戶還是得你自己找',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/start-up-nation.html',
  'book'      => ['name' => '創業之國以色列', 'author' => 'Dan Senor 丹恩・席諾、Saul Singer 掃羅・辛格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子,池子裡有水嗎?',
    'body'    => '別急著用一身的敢往前衝。挑三到五個你篤定會要這東西的真人,問他們現在為了這件麻煩,已經在花什麼錢、什麼時間——有人在花,才是池子裡有水的證據。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '創業之國以色列',   'path' => '/lens/start-up-nation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
