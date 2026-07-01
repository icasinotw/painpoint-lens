<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '同一款車十個人在賣，紀錄為什麼是他：用痛點之尺重讀《這樣賣，我獲金氏世界紀錄》｜痛點 P.A.I.N.',
  'desc'  => '同一間展示間、同一款雪佛蘭，十來個業務一起賣，喬・吉拉德卻在十五年裡賣掉一萬三千台，寫進金氏世界紀錄。用痛點的眼光重讀《這樣賣，我獲金氏世界紀錄》：紀錄的真正來源，是他站上一個滿場對手都看漏、客戶卻在痛的空位。先問你這行，那個沒人服務的痛在哪。',
  'path'  => '/lens/how-to-sell-anything-to-anybody',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《這樣賣，我獲金氏世界紀錄》',
  'heading'   => '同一款車十個人在賣，紀錄為什麼是他',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/how-to-sell-anything-to-anybody.html',
  'book'      => ['name' => '這樣賣，我獲金氏世界紀錄', 'author' => 'Joe Girard（喬・吉拉德）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在練成交話術之前，先找到那個沒人服務的痛',
    'body'    => '《這樣賣，我獲金氏世界紀錄》教你把眼前的人服務到死心塌地；痛點這把尺，幫你先確認那個痛真的存在、還沒人補。花幾分鐘體檢一個點子，看看你想站的那個位子底下，是不是真有人在痛。',
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
    ['name' => '這樣賣，我獲金氏世界紀錄', 'path' => '/lens/how-to-sell-anything-to-anybody'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
