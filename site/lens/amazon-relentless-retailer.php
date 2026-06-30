<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把顧客的麻煩當一筆帳，算了二十五年：用痛點之尺重讀《Amazon無限擴張的零售帝國》｜痛點 P.A.I.N.',
  'desc'  => '《Amazon無限擴張的零售帝國》兩位零售業作者把亞馬遜的飛輪攤開，發現圈的正中心是一件笨事：它比誰都受不了讓顧客多受一點罪。用痛點的眼光重讀：亞馬遜是全世界最自律的痛點驗證者——先確認顧客早就在為某個麻煩付代價，再回頭把它整個拆掉。',
  'path'  => '/lens/amazon-relentless-retailer',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《Amazon無限擴張的零售帝國》',
  'heading'   => '把顧客的麻煩當一筆帳，算了二十五年',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/amazon-relentless-retailer.html',
  'book'      => ['name' => 'Amazon無限擴張的零售帝國', 'author' => 'Natalie Berg（娜塔莉・伯格）、Miya Knights（米雅・奈茲）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先別急著把產品做好，先找那條顧客在排的隊',
    'body'    => '《Amazon無限擴張的零售帝國》逼你把起點換掉：別問「我要多賣什麼」，先問「顧客在受什麼罪」。把同一個順序用在你的點子上——先確認真的有人，已經為這個麻煩掏過錢、忍過時間。五分鐘免費體檢一個點子，看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                       'path' => '/'],
    ['name' => '痛點之尺',                    'path' => '/lens'],
    ['name' => 'Amazon無限擴張的零售帝國',     'path' => '/lens/amazon-relentless-retailer'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
