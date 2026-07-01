<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《鬆綁你的焦慮習慣》｜痛點 P.A.I.N.',
  'desc'  => '賈德森・布魯爾《鬆綁你的焦慮習慣》發現，焦慮之所以戒不掉，是大腦一直偷偷記著一筆「我有在處理」的獎賞，哪怕事情一件也沒解決。他的「第二檔」，是逼你回到當下、親自去對那筆帳。用痛點的眼光重讀：同一把查帳尺掉頭往門外量，你那個「一定有人要」的點子，獎賞欄到底是滿的，還是跟半小時的空擔心一樣，只是感覺很忙、實際在虧？',
  'path'  => '/lens/unwinding-anxiety',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《鬆綁你的焦慮習慣》',
  'heading'   => '焦慮戒不掉，因為你從沒替它查過帳',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/unwinding-anxiety.html',
  'book'      => ['name' => '鬆綁你的焦慮習慣(Unwinding Anxiety: New Science Shows How to Break the Cycles of Worry and Fear to Heal Your Mind)', 'author' => 'Judson Brewer 賈德森・布魯爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子的獎賞欄，是滿的還是空的？',
    'body'    => '布魯爾教你回到當下，查一次焦慮到底付了你什麼獎賞；把同一把查帳尺掉頭往門外量，先看看你那個「一定有人要」的點子，帳本上到底有沒有人真的想要。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '鬆綁你的焦慮習慣',  'path' => '/lens/unwinding-anxiety'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
