<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '威信沒人能發給自己，「一定有人要」也一樣：用痛點之尺重讀《僕人》｜痛點 P.A.I.N.',
  'desc'  => '《僕人》的杭特說，領導者的威信沒人能發給自己，是被你服務的人願意交到你手上的。用痛點之尺重讀：你卻給還沒半個顧客的點子，自己蓋了張「一定有人要」的章——市場跟人一樣，從不認自封的威信，只認一個陌生人掏錢那天親手交給你的那一張。',
  'path'  => '/lens/the-servant',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《僕人：修道院的領導啟示錄》',
  'heading'   => '市場跟人一樣，從不認你自封的威信',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-servant.html',
  'book'      => ['name' => '僕人：修道院的領導啟示錄', 'author' => 'James C. Hunter 詹姆士・杭特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子的「一定有人要」，是你自己蓋的章，還是有人替你蓋的？',
    'body'    => '威信沒人能發給自己，「有人要」也一樣。趁這禮拜，把你的東西連同一個真實的價格，端到一個對你沒有義務的陌生人面前，看他今天掏不掏錢——讓門外的人，替你蓋下第一張不是自封的章。',
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
    ['name' => '僕人',      'path' => '/lens/the-servant'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
