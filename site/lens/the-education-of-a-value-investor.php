<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '救你的不是更聰明，是把房間重新擺過：用痛點之尺拆《華爾街之狼從良記》｜痛點 P.A.I.N.',
  'desc'  => '《華爾街之狼從良記》最反直覺的一課：救回斯皮爾的不是更聰明，是搬家、把報價螢幕搬進別的房間、趁清醒先立規矩。用痛點的眼光重讀——你那些改不掉的決定，該動的常常不是決心，是你周圍的環境。',
  'path'  => '/lens/the-education-of-a-value-investor',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《華爾街之狼從良記》',
  'heading'   => '斯皮爾改造自己，靠的是搬家、搬螢幕、立規矩',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-education-of-a-value-investor.html',
  'book'      => ['name' => '華爾街之狼從良記（The Education of a Value Investor）', 'author' => 'Guy Spier 蓋伊・斯皮爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂他怎麼替自己設路障之後，下一步別又只是「下決心」',
    'body'    => '斯皮爾示範的是：與其賭當下的自己會做對，不如趁清醒先把環境和規矩擺好。同一個動作，也能拿來檢查你手上那個一直說「準備好再開始」的點子，看它到底卡在哪一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '華爾街之狼從良記', 'path' => '/lens/the-education-of-a-value-investor'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
