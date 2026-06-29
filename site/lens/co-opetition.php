<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你不在場，這塊餅會不會變小：用痛點之尺重讀《競合策略》｜痛點 P.A.I.N.',
  'desc'  => '《競合策略》給你一把冷靜的尺——附加價值：少了你，這局的餅會縮掉多少，縮得多你才分得到。用痛點的眼光重讀：這把尺再利，算的仍是一塊書裡預設「已經有人要」的餅；對自己的點子，最該先驗的是價值網最上面那格顧客裡，到底有沒有一個真的在餓、肯掏錢的人。',
  'path'  => '/lens/co-opetition',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《競合策略》',
  'heading'   => '你不在場，這塊餅會不會變小',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/co-opetition.html',
  'book'      => ['name' => '競合策略', 'author' => 'Adam Brandenburger（亞當・布蘭登伯格）、Barry Nalebuff（貝利・奈勒波夫）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，最上面那格站得住嗎？',
    'body'    => '《競合策略》教你把生意畫成一張價值網，再算清楚你的附加價值；痛點這把尺，幫你先驗最上面那一格——到底有沒有一個真的在餓、肯掏錢的人。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
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
    ['name' => '競合策略',  'path' => '/lens/co-opetition'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
