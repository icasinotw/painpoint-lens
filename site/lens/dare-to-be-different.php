<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的不一樣，要落在某個人的難處上：用痛點之尺重讀《親愛的，別害怕與眾不同》｜痛點 P.A.I.N.',
  'desc'  => '張瑋軒《親愛的，別害怕與眾不同》發給你一張「不必再道歉」的許可證，要你別把與眾不同藏起來。用痛點的眼光補一刀：勇氣只負責讓你敢站上台，不負責台下有人需要你說的話——你的不一樣，要落在某個人真實的難處上，才從個人特色變成非你不可。',
  'path'  => '/lens/dare-to-be-different',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《親愛的，別害怕與眾不同》',
  'heading'   => '你的不一樣，要落在某個人的難處上',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/dare-to-be-different.html',
  'book'      => ['name' => '親愛的，別害怕與眾不同', 'author' => '張瑋軒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你身上那份與眾不同，有人正等著嗎？',
    'body'    => '這本書要你別怕跟別人不一樣；真要把這份不一樣活成有去處的東西，先用痛點的眼光確認：有沒有一個有名有姓的人，正為某件事卡著，而你的不同剛好能讓他鬆一口氣。',
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
    ['name' => '親愛的，別害怕與眾不同', 'path' => '/lens/dare-to-be-different'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
