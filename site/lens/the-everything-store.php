<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '貝佐斯八十歲那個提問，只能替你壯膽：用痛點之尺重讀《貝佐斯傳》｜痛點 P.A.I.N.',
  'desc'  => '《貝佐斯傳》裡最常被引用的「遺憾最小化」——貝佐斯想像自己八十歲、問哪個選擇更不後悔，於是辭職創業。用痛點之尺重讀：這套思考能替你壯膽、跨過對失敗的恐懼，卻一個字都沒回答「外面到底有沒有人要」。而真正的貝佐斯，跳之前還做了一件很冷靜的市場功課；多數人只抄走了壯膽那一半。',
  'path'  => '/lens/the-everything-store',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《貝佐斯傳》',
  'heading'   => '貝佐斯八十歲那個提問，只能替你壯膽',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-everything-store.html',
  'book'      => ['name' => '貝佐斯傳：從電商之王到物聯網中樞，亞馬遜成功的關鍵', 'author' => 'Brad Stone 布萊德・史東'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在「不試會後悔」推你跳之前，先補貝佐斯的另一半功課',
    'body'    => '遺憾最小化只替你過了恐懼那一關；有沒有人要那一關，得你自己走出門去填。《痛點》這把尺，先幫你把最容易致命的需求那一關驗清楚——現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '貝佐斯傳',        'path' => '/lens/the-everything-store'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
