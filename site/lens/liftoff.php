<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '馬斯克算過，他大概只射得起四次：用痛點之尺重讀《SpaceX升空記》｜痛點 P.A.I.N.',
  'desc'  => '《SpaceX升空記》把獵鷹一號三次失敗、第四次才入軌的絕境寫得淋漓盡致。用痛點的眼光重讀：馬斯克押的是一個數得出來的數字——大概夠射四次，而真正接住公司的，是發射成功後 NASA 那紙十幾億美元的合約。書裡寫滿了「怎麼撐」，卻替你跳過了更前面那一題：你要做的東西，門外到底有沒有人正等著、肯掏錢。',
  'path'  => '/lens/liftoff',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《SpaceX升空記》',
  'heading'   => '馬斯克算過，他大概只射得起四次',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/liftoff.html',
  'book'      => ['name' => 'SpaceX升空記', 'author' => '艾瑞克・伯格（Eric Berger）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在押上身家之前，先確認門外有人要',
    'body'    => '《SpaceX升空記》教你在絕境裡怎麼撐住；痛點這把尺，幫你補上更前面那一格——火箭飛起來那天，門外到底有沒有人正等著、肯掏錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => 'SpaceX升空記', 'path' => '/lens/liftoff'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
