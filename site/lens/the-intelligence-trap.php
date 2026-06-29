<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '輪到評自己的點子，聰明反而幫倒忙：用痛點之尺重讀《為什麼聰明人會做蠢事？》｜痛點 P.A.I.N.',
  'desc'  => '《為什麼聰明人會做蠢事？》發現智商高不但擋不住蠢決定，有時還反過來幫倒忙——你越會分析，越擅長替一個錯點子生出滴水不漏的理由。用痛點的眼光重讀：輪到評估自己的點子，聰明常是內鬼；動手前，先寫死一行「什麼結果會讓我收手」，趁還沒對它動感情之前把標準釘住。',
  'path'  => '/lens/the-intelligence-trap',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《為什麼聰明人會做蠢事？》',
  'heading'   => '輪到評自己的點子，聰明反而幫倒忙',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-intelligence-trap.html',
  'book'      => ['name' => '為什麼聰明人會做蠢事？', 'author' => '大衛・羅伯森（David Robson）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，你最不想聽見哪一句話？',
    'body'    => '那句你最不想聽見的話，八成就是它最該被問的地方。趁你還沒愛到聽不進去，先找一個敢對你說真話的人，把它問出口。',
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
    ['name' => '為什麼聰明人會做蠢事？', 'path' => '/lens/the-intelligence-trap'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
