<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你以為你在用它，它的帳本上你是一批貨：用痛點之尺重讀《注意力商人》｜痛點 P.A.I.N.',
  'desc'  => '吳修銘在《注意力商人》裡，把一台收割注意力、再轉手賣掉的機器，從 1833 年的便士報一路拆到 Google、臉書。用痛點的眼光重讀：做免費產品的人，使用者不在你的收入欄，他在庫存欄——而收割來的注意力，是會反撲的地基。',
  'path'  => '/lens/the-attention-merchants',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《注意力商人》',
  'heading'   => '你以為你在用它，它的帳本上，你是一批貨',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-attention-merchants.html',
  'book'      => ['name' => '注意力商人：他們如何操弄人心，把「注意力」變成生意？', 'author' => 'Tim Wu 吳修銘'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '「免費」這兩個字，最該先問一句它靠誰賺錢',
    'body'    => '一個東西不跟你收錢，你該起的疑心不是它佛心，是你坐在交易桌的哪一邊。換一篇拆書，繼續拿這把尺戳下去。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
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
    ['name' => '注意力商人',  'path' => '/lens/the-attention-merchants'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
