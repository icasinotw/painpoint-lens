<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '傳播是放大器，不是引擎：用痛點之尺重讀《瘋潮行銷》｜痛點 P.A.I.N.',
  'desc'  => '《瘋潮行銷》的 STEPPS 教你怎麼讓東西被瘋傳，威力十足——但它預設這東西本來就有人要。傳播是放大器，放大的是既有的需求。用 P.A.I.N. 補上它跳過的那一格：先確認有人在痛、痛到會掏錢，再煩惱怎麼讓它紅。',
  'path'  => '/lens/contagious',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《瘋潮行銷》',
  'heading'   => '傳播是放大器，不是引擎',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/contagious.html',
  'book'      => ['name' => '瘋潮行銷（Contagious：Why Things Catch On）', 'author' => 'Jonah Berger 約拿·博格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在買擴音器之前，先確認你有值得放大的東西',
    'body'    => '《瘋潮行銷》教你把東西傳開；《痛點》這把尺，幫你先確認底下有沒有人在痛、會不會掏錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '瘋潮行銷',  'path' => '/lens/contagious'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
