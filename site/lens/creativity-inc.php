<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '連皮克斯都看不見自己的問題，你的點子憑什麼例外：用痛點之尺重讀《創意電力公司》｜痛點 P.A.I.N.',
  'desc'  => '《創意電力公司》裡，卡特莫爾打造皮克斯的祕訣，是一台逼大家說真話的機器——因為連最強的創作者，都看不見自己手上那部片哪裡爛了。用痛點之尺重讀：你聽到的「聽起來不錯」多半只是禮貌，先確認真的有人要，你得先給人一個能戳穿你點子的位置。',
  'path'  => '/lens/creativity-inc',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《創意電力公司》',
  'heading'   => '連皮克斯都看不見自己的問題，你的點子憑什麼例外',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/creativity-inc.html',
  'book'      => ['name' => '創意電力公司', 'author' => 'Ed Catmull 艾德・卡特莫爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，找過會對你說真話的人驗過嗎？',
    'body'    => '卡特莫爾打造皮克斯，靠的是一台逼大家說真話的機器；你的點子缺的，也是一個能戳穿它的位置。《痛點》這把尺，先幫你把最容易致命的需求那一關驗清楚——現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',             'path' => '/'],
    ['name' => '痛點之尺',          'path' => '/lens'],
    ['name' => '創意電力公司',       'path' => '/lens/creativity-inc'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
