<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '數據會越用越聰明，前提是真有人在用：用痛點之尺重讀《智能商業模式》｜痛點 P.A.I.N.',
  'desc'  => '曾鳴把未來的生意拆成兩具引擎：網絡協同與數據智能，讓生意越用越聰明。但那台會自我學習的機器要轉，得先有燃料。用痛點之尺補上它沒問的那一格：先有一個真實的痛、一筆真實的交易，數據才活得起來。',
  'path'  => '/lens/smart-business',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《智能商業模式》',
  'heading'   => '數據會越用越聰明，前提是真有人在用',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/smart-business.html',
  'book'      => ['name' => '智能商業模式：阿里巴巴利用大數據與網路效應，打造劃時代的智能商業模式', 'author' => '曾鳴'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '那台機器，有東西可學嗎？',
    'body'    => '《智能商業模式》教你打造一門越用越聰明的生意；但機器要轉，得先有一筆真實的交易當燃料。花五分鐘，用 P.A.I.N. 體檢一個你正在想的點子，看「有沒有人要」這一格站不站得住。',
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
    ['name' => '智能商業模式', 'path' => '/lens/smart-business'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
