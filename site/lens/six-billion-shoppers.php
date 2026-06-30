<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '六十億個買家，等在一道沒人想填的坎後面：用痛點之尺重讀《勾引六十億個買家》｜痛點 P.A.I.N.',
  'desc'  => '《勾引六十億個買家》帶你看新興市場電商的下一波：六十億個買家，卡在信任、付款、物流這幾道沒人想填的坎後面。用痛點的眼光重讀衛波特這本書——機會不在市場最成熟的地方，在它最破、最缺的那道摩擦上；而別人的成功劇本，換個國家就會空轉。',
  'path'  => '/lens/six-billion-shoppers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《勾引六十億個買家》',
  'heading'   => '六十億個買家，等在一道沒人想填的坎後面',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/six-billion-shoppers.html',
  'book'      => ['name' => '勾引六十億個買家：阿里巴巴打造的網路新世界', 'author' => '衛波特 Porter Erisman'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你盯的那個市場，最深的那道坎在哪？',
    'body'    => '衛波特讓你看懂機會的形狀；《痛點》這把尺，幫你把「我的客戶到底卡在哪」一步步問到具體。挑一個你好奇的市場，五分鐘跑一遍，找出那道擋住成交的摩擦。',
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
    ['name' => '勾引六十億個買家', 'path' => '/lens/six-billion-shoppers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
