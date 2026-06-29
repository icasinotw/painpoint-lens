<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '越想要，你越看不清桌上發生了什麼：用痛點之尺重讀《萬事好商量》｜痛點 P.A.I.N.',
  'desc'  => '科恩在《萬事好商量》把整個世界看成一張談判桌，他最反直覺的一句是「在乎，但別太在乎」。用痛點的眼光重讀：你越非成交不可，就越會被自己的著急牽著走，把對方的拖延讀成快好了——這跟創業者太想要、於是把「沒人要」聽成「再撐一下就有人要」，是同一個盲點。',
  'path'  => '/lens/you-can-negotiate-anything',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《萬事好商量》',
  'heading'   => '越想要，你越看不清桌上發生了什麼',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/you-can-negotiate-anything.html',
  'book'      => ['name' => '萬事好商量', 'author' => 'Herb Cohen（賀伯・科恩）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在賠掉下一個半年之前，先量一次體溫',
    'body'    => '科恩要你「在乎，但別太在乎」；痛點這把尺，幫你把「我有多想要」從判斷裡先拆出來，看清一個點子底下，到底有沒有人真的在掏錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '萬事好商量',     'path' => '/lens/you-can-negotiate-anything'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
