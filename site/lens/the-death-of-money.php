<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把「世界要崩了」換算成一筆保險費:用痛點之尺重讀《下一波全球貨幣大崩潰》｜痛點 P.A.I.N.',
  'desc'  => '詹姆斯・瑞卡茲用複雜理論,把整個國際貨幣系統看成一面隨時會崩的積雪:沒人猜得中哪片雪花,卻量得出雪積多厚。用痛點之尺重讀《下一波全球貨幣大崩潰》——這本書最值錢的一手,是把「世界要崩了」的恐懼,換算成一筆你算得出來的保險費。',
  'path'  => '/lens/the-death-of-money',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《下一波全球貨幣大崩潰》',
  'heading'   => '把「世界要崩了」換算成一筆保險費',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-death-of-money.html',
  'book'      => ['name' => '下一波全球貨幣大崩潰', 'author' => 'James Rickards 詹姆斯・瑞卡茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在下重注的那個決定,替最壞的一天標過價了嗎?',
    'body'    => '挑一件你手上賭最大的事,把「萬一失敗」拆成兩個數字:真出事的損失大概多少、你願意先付多少成本當保險,寫在同一張紙上。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '下一波全球貨幣大崩潰',  'path' => '/lens/the-death-of-money'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
