<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '棋盤的後半段堆滿了米，你還沒找到一個會餓的人：用痛點之尺重讀《第二次機器時代》｜痛點 P.A.I.N.',
  'desc'  => '《第二次機器時代》用棋盤後半段的米，講清楚數位科技把造東西的能力推上指數曲線、便宜到趨近免費。但書裡每條曲線畫的都是「能造出什麼」，獨缺最該先確認的那一條——你要做的東西，外面到底有沒有一個會掏錢的人。',
  'path'  => '/lens/the-second-machine-age',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《第二次機器時代》',
  'heading'   => '棋盤的後半段堆滿了米，你還沒找到一個會餓的人',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-second-machine-age.html',
  'book'      => ['name' => '第二次機器時代：智慧科技如何改變人類的工作、經濟與未來？', 'author' => '艾瑞克・布林優夫森（Erik Brynjolfsson）、安德魯・麥克費（Andrew McAfee）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，外面真的有人在等嗎？',
    'body'    => '《第二次機器時代》讓你看懂這個時代多適合動手造東西；《痛點》這把尺，幫你先確認動手之前，外面真的有一個會掏錢的人。現在就免費體檢一個點子，五分鐘照出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '第二次機器時代',  'path' => '/lens/the-second-machine-age'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
