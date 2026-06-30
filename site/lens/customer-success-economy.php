<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他買了一次，還不算你的客戶：用痛點之尺重讀《絕對續訂！》｜痛點 P.A.I.N.',
  'desc'  => '尼克・梅塔《絕對續訂！》談「客戶成功」，多數人記得的是訂閱經濟、降低流失率那套組織方法。用痛點的眼光重讀：在按年收費的生意裡，客戶每一次續約，都是拿真錢替「你到底有沒有解他的痛」重投一次票——這把續訂的尺，比第一次成交誠實得多。把它倒過來用，在動工前就替你的點子加問一道續訂題。',
  'path'  => '/lens/customer-success-economy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《絕對續訂！》',
  'heading'   => '他買了一次，還不算你的客戶',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/customer-success-economy.html',
  'book'      => ['name' => '絕對續訂！', 'author' => '尼克・梅塔（Nick Mehta）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，撐不撐得過「第二次掏錢」？',
    'body'    => '第一次成交，多半靠的是開場話術與一時的新鮮感；真正證明你解對痛的，是客戶願不願意再付一次錢。趁動工前，先把這道續訂題問清楚——挑一個你正在猶豫的點子，五分鐘跑一遍，看它底下有沒有人會付第二次。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '絕對續訂！',  'path' => '/lens/customer-success-economy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
