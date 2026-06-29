<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他敢失敗五一二七次，因為那個痛是真的：用痛點之尺重讀《Dyson：詹姆斯・戴森的發明人生》｜痛點 P.A.I.N.',
  'desc'  => '戴森失敗五一二七次的故事，常被當成毅力範本。但用《痛點》的眼光重讀，那五年死磕之所以划算，是因為他要解的痛——吸塵器集塵袋一卡灰就沒吸力——他自己天天在受，全世界也早就在為它掏錢買新袋子。痛先被確認是真的，五千多次失敗才有人買單。把毅力單獨抽出來膜拜，你很可能複製到的，只是五千種把沒人要的東西打磨到完美的方法。',
  'path'  => '/lens/invention-a-life',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《Dyson：詹姆斯・戴森的發明人生》',
  'heading'   => '他敢失敗五一二七次，因為那個痛是真的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/invention-a-life.html',
  'book'      => ['name' => 'Dyson：詹姆斯・戴森的發明人生', 'author' => '詹姆斯・戴森 James Dyson'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，找得到自己的「集塵袋」嗎？',
    'body'    => '戴森敢賭五年，是因為他知道家家戶戶每隔一陣子就得掏錢買新袋子——那筆早就在發生的支出，就是痛真實存在的鐵證。趁還沒砸下整段時間之前，先把你那個痛「已經有人在付錢」的證據，一筆一筆撿回來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                          'path' => '/'],
    ['name' => '痛點之尺',                       'path' => '/lens'],
    ['name' => 'Dyson：詹姆斯・戴森的發明人生',   'path' => '/lens/invention-a-life'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
