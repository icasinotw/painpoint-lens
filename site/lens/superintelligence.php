<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的新創，是一台拚命做迴紋針的機器：用痛點之尺重讀《超智慧》｜痛點 P.A.I.N.',
  'desc'  => '伯斯特隆姆《超智慧》警告：一個夠強的執行者，只會照你說出口的目標拚到底，不管那目標對不對。用痛點的眼光重讀——你的新創就是這台機器，你越能幹，越快把一個沒人要的東西做到完美。動手前，先把你餵它的目標驗對。',
  'path'  => '/lens/superintelligence',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《超智慧》',
  'heading'   => '你的新創，是一台拚命做迴紋針的機器',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/superintelligence.html',
  'book'      => ['name' => '超智慧：出現途徑、可能危機，與我們的因應之道', 'author' => 'Nick Bostrom 尼克・伯斯特隆姆'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你交出去的那句目標，本身對嗎？',
    'body'    => '《超智慧》提醒你：一台夠能幹的機器，只會照你說出口的目標拚到底。你的新創就是這台機器——動手之前，先確認你餵它的指令，真的是有人要的東西。',
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
    ['name' => '超智慧',    'path' => '/lens/superintelligence'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
