<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你當上池塘裡的老大，水裡有東西吃嗎：用痛點之尺重讀《創業就是要細分壟斷》｜痛點 P.A.I.N.',
  'desc'  => '《創業就是要細分壟斷》要你把市場切到小得你能獨佔，先在一小塊當第一。但你能當老大的地方，不一定是有人在痛的地方。用 P.A.I.N. 補上這本書沒逼你回答的那一格：那口你壓得住的池塘，水裡到底有沒有人。',
  'path'  => '/lens/niche-monopoly',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創業就是要細分壟斷》',
  'heading'   => '你當上池塘裡的老大，水裡有東西吃嗎',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/niche-monopoly.html',
  'book'      => ['name' => '創業就是要細分壟斷', 'author' => '李開復、汪華、傅盛'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你切出來的那塊市場，到底有沒有人？',
    'body'    => '《創業就是要細分壟斷》教你把市場切到小得你守得住；切之前，先確認那一小塊裡真的有人在痛、在掏錢。五分鐘體檢一個點子，看看你那口池塘水裡有沒有人。',
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
    ['name' => '創業就是要細分壟斷',  'path' => '/lens/niche-monopoly'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
