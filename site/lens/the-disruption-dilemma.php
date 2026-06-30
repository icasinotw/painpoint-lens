<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '顛覆者的頭銜，要等有人在痛才算數：用痛點之尺重讀《破壞性創新的兩難》｜痛點 P.A.I.N.',
  'desc'  => '格恩斯《破壞性創新的兩難》把被喊到爛的「破壞」拆成兩種、還拆掉了破壞必死的宿命論，寫得極清楚——但它整本是寫給怕被掀桌的巨人。用痛點的眼光翻到另一面：自稱要顛覆的你，先確認對面有沒有人在痛。',
  'path'  => '/lens/the-disruption-dilemma',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《破壞性創新的兩難》',
  'heading'   => '顛覆者的頭銜，要等有人在痛才算數',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-disruption-dilemma.html',
  'book'      => ['name' => '破壞性創新的兩難', 'author' => 'Joshua Gans 約書亞·格恩斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「我要顛覆」，對面真的有人在痛嗎？',
    'body'    => '格恩斯教巨人怎麼看清破壞、守住生意；但你若手上只有一個點子，得先確認對面真的有人在痛。現在就免費體檢一個點子，五分鐘找出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '破壞性創新的兩難',     'path' => '/lens/the-disruption-dilemma'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
