<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '更有錢的對手鐵了心抄你，什麼擋得住：用痛點之尺重讀《7大市場力量》｜痛點 P.A.I.N.',
  'desc'  => '《7大市場力量》把模糊的「護城河」拆成七種抄不走的障礙，逼你用證據證明優勢守得住。用痛點的眼光重讀：海爾默把那把懷疑的尺全用在「障礙」上，卻准你直接假設「有人要」——而對只有點子的人，最沒被驗證、最該先查的，正是這一格。',
  'path'  => '/lens/7-powers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《7大市場力量》',
  'heading'   => '更有錢的對手鐵了心抄你，什麼擋得住',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/7-powers.html',
  'book'      => ['name' => '7大市場力量：商業策略的基礎', 'author' => 'Hamilton Helmer（漢米爾頓・海爾默）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '障礙之前，先驗「有沒有人要」這一格',
    'body'    => '《7大市場力量》逼你證明優勢抄不走；痛點這把尺，幫你把同一種懷疑往前搬一格——先查到底有沒有人，已經為這個痛實際掏過錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '7大市場力量', 'path' => '/lens/7-powers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
