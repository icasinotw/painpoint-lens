<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那句「一定有人要」，是腦中替沒見過你東西的觀眾預錄的掌聲：用痛點之尺重讀《我生命中的一段歷險》｜痛點 P.A.I.N.',
  'desc'  => '《我生命中的一段歷險》裡，艾格買下皮克斯的決定，起點是他站在一場開幕遊行旁、看真實觀眾為哪些角色鼓掌，而不是一份試算表。用痛點之尺重讀——你那句「一定有人要」，是你在腦中替還沒見過你東西的觀眾，預先錄好的掌聲；屬於你點子的那場遊行，到現在還沒辦過。',
  'path'  => '/lens/the-ride-of-a-lifetime',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《我生命中的一段歷險》',
  'heading'   => '艾格站在遊行隊伍旁，當場看出迪士尼的創意引擎早就熄火了；你那個點子，還沒去過任何一場遊行',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-ride-of-a-lifetime.html',
  'book'      => ['name' => '我生命中的一段歷險(The Ride of a Lifetime)', 'author' => 'Robert Iger 羅伯特・艾格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，最篤定的那句「一定有人要」，敢不敢辦一場真的遊行？',
    'body'    => '《我生命中的一段歷險》裡，艾格的大決定都先去看了真實的人在做什麼；你那個點子也一樣，先設一個真要付錢的場合，讓一個陌生人替你把「一定有人要」，當場驗成真的或假的。',
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
    ['name' => '我生命中的一段歷險', 'path' => '/lens/the-ride-of-a-lifetime'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
