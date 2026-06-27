<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你想照抄的那個成功故事，馬克斯會先問你：哪一塊是運氣：用痛點之尺重讀《投資最重要的事》｜痛點 P.A.I.N.',
  'desc'  => '《投資最重要的事》花一整章談運氣：別用結果評斷一個決定。用痛點的眼光重讀，它戳中創業者最常犯的錯——把別人的好運，當成一套能照抄的本事。動手前先驗「因」：外面此刻有沒有人真的在為這件事痛。',
  'path'  => '/lens/the-most-important-thing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《投資最重要的事》',
  'heading'   => '你想照抄的那個成功故事，馬克斯會先問你：哪一塊是運氣',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-most-important-thing.html',
  'book'      => ['name' => '投資最重要的事（The Most Important Thing）', 'author' => 'Howard Marks 霍華・馬克斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是真有人要，還是你運氣好賭一把？',
    'body'    => '馬克斯教投資人別用結果騙自己；《痛點》這把尺，幫你在動手前先驗「因」——外面到底有沒有人在痛。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '投資最重要的事',   'path' => '/lens/the-most-important-thing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
