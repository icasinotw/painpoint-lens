<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '細菌都懂的順序，你的點子偏偏做反了：用痛點之尺重讀《事物的奇怪順序》｜痛點 P.A.I.N.',
  'desc'  => '達馬吉歐在《事物的奇怪順序》裡說，生命幾十億年只認一個順序：先有痛，才有東西被造出來——文化、工具、每一門生意，底下都躺著一個真的在受的苦。用痛點的眼光重讀：你卻總把順序做反，先愛上一個點子，再回頭替它招募一個痛。而招募來的痛，永遠會投你要的那一票。',
  'path'  => '/lens/the-strange-order-of-things',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《事物的奇怪順序》',
  'heading'   => '細菌都懂的順序，你的點子偏偏做反了',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-strange-order-of-things.html',
  'book'      => ['name' => '事物的奇怪順序', 'author' => 'Antonio Damasio（安東尼歐・達馬吉歐）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你愛上的那個點子後面，真的有人在痛嗎？',
    'body'    => '別再問「誰會需要我這個東西」——那是拿著點子去找痛。反過來問：現在，誰已經為了某件難受的事，在花錢、花時間、忍著將就？',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',          'path' => '/lens'],
    ['name' => '事物的奇怪順序',      'path' => '/lens/the-strange-order-of-things'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
