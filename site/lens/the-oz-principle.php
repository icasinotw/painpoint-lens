<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《當責，從停止抱怨開始》',
  'desc'  => '《當責，從停止抱怨開始》把賴掉責任拆成一個「受害者循環」，要你爬到那條線的上面、為結果當責。用痛點之尺重讀：你對那個點子什麼都扛了，唯獨「有沒有人要」那一格，你還在怪市場、等時機——那正是書裡說的線下；第一步「看見它」，就是讓一個肯掏錢的陌生人，當面告訴你答案。',
  'path'  => '/lens/the-oz-principle',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《當責，從停止抱怨開始》',
  'heading'   => '「有沒有人要」那一格，你還在怪市場',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-oz-principle.html',
  'book'      => ['name' => '當責，從停止抱怨開始：克服被害者循環，重建負責、信任、樂在工作的職場文化(The Oz Principle)', 'author' => 'Roger Connors 羅傑・康諾斯、Tom Smith 湯姆・史密斯、Craig Hickman 克雷格・希克曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在為那個點子當責之前，先確認它真的有人在等',
    'body'    => '康諾斯要你扛起結果，但他假設結果早有人替你定好；你頭上沒那個人。先做一次「看見它」——挑點子裡最具體的一塊，開個價，找一個不欠你人情的陌生人，看他掏不掏錢。',
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
    ['name' => '當責，從停止抱怨開始',  'path' => '/lens/the-oz-principle'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
