<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '空房一直都在，沒人敢住才是真正的牆：用痛點之尺重讀《Airbnb 創業生存法則》｜痛點 P.A.I.N.',
  'desc'  => '《Airbnb 創業生存法則》裡，空房和旅客一直都在，這門生意卻十幾年長不出來。用痛點之尺重讀：真正卡住它的，不是房間，是陌生人之間那道不敢開門的牆——Airbnb 的功夫，全花在把「信任」一格一格拆成看得見的設計。一個真有人在痛、卻一直沒人做成的縫，藏的往往就是這道沒人替它命名的摩擦。',
  'path'  => '/lens/the-airbnb-story',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《Airbnb 創業生存法則》',
  'heading'   => '空房一直都在，沒人敢住才是真正的牆',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-airbnb-story.html',
  'book'      => ['name' => 'Airbnb 創業生存法則', 'author' => 'Leigh Gallagher 莉・蓋勒格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那門生意卡住的，是哪一道牆？',
    'body'    => 'Airbnb 卡的是信任那道牆；你那個點子卡住的，可能是另一道完全不同的摩擦。痛點之尺前面那幾關，先幫你把「到底有沒有人要、為什麼還沒人做成」這兩題問清楚——花五分鐘體檢一個點子，看出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => 'Airbnb 創業生存法則', 'path' => '/lens/the-airbnb-story'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
