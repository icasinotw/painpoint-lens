<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他扛起了戰場上的每一件事，除了一件：這座城該不該攻：用痛點之尺重讀《主管這樣帶人就對了》｜痛點 P.A.I.N.',
  'desc'  => '《主管這樣帶人就對了》用拉馬迪實戰教你「極端當責」——你世界裡的每一件事都是你的責任。但在軍隊裡，「要打哪座城」是上頭的命令，不在當責範圍。用痛點之尺重讀：創業者頭上沒有指揮鏈，「這仗該不該打、外面有沒有人要」那一格，第一次得你自己扛。',
  'path'  => '/lens/extreme-ownership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《主管這樣帶人就對了》',
  'heading'   => '他扛起了戰場上的每一件事，除了一件：這座城該不該攻',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/extreme-ownership.html',
  'book'      => ['name' => '主管這樣帶人就對了', 'author' => 'Jocko Willink、Leif Babin'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那座拚命要攻的城，裡頭到底有沒有人？',
    'body'    => '《主管這樣帶人就對了》教你把執行扛到滿分；《痛點》這把尺，幫你先確認那座城裡真的有人在等。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '主管這樣帶人就對了',       'path' => '/lens/extreme-ownership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
