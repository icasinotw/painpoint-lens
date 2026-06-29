<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最會賺的那群人，反而最大方承認自己在抄：用痛點之尺重讀《更富有、更睿智、更快樂》｜痛點 P.A.I.N.',
  'desc'  => '葛林訪遍頂尖投資人後發現，帕波萊這種大師最大的本事不是更會預測，是大方承認自己在抄——直接複製巴菲特的基金條款、還砸六十幾萬美元只為跟他吃頓飯偷學。用痛點的眼光重讀：你急著做一個獨一無二的東西，常只是被「原創」這個漂亮劇本騙了；在會賠真錢的地方，先抄一個被驗證會賺的，往往比逞強聰明安全得多。',
  'path'  => '/lens/richer-wiser-happier',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《更富有、更睿智、更快樂》',
  'heading'   => '最會賺的那群人，反而最大方承認自己在抄',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/richer-wiser-happier.html',
  'book'      => ['name' => '更富有、更睿智、更快樂：全球最傑出投資大師，從投資到人生的致勝智慧（Richer, Wiser, Happier）', 'author' => 'William Green 威廉・葛林'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂「先抄一個會賺的」之後，下一步先別又卡在憋原創',
    'body'    => '帕波萊逼你戒掉的，是「我得先想出一個沒人做過的東西」這個念頭；你手上那件遲遲不動的事，卡的常常是同一個念頭。把它攤開來照一照，看看你最常拿來拖延的那個藉口長什麼樣。',
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
    ['name' => '更富有、更睿智、更快樂', 'path' => '/lens/richer-wiser-happier'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
