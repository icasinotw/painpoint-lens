<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '能多等十五分鐘的那些小孩，偷偷把棉花糖變成了一張照片｜痛點 P.A.I.N.',
  'desc'  => '米歇爾《忍耐力》最反直覺的一課：能等的小孩贏在懂得替眼前那顆糖降溫——別過頭、當成一張照片，而不是硬瞪著它。用痛點之尺重讀：你最該降溫的那顆糖叫「一定有人要」，你越在腦中排練它越甜；涼下來，你才走得出門，去問一個會掏錢的陌生人。',
  'path'  => '/lens/the-marshmallow-test',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《忍耐力》',
  'heading'   => '能多等十五分鐘的那些小孩，偷偷把棉花糖變成了一張照片',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-marshmallow-test.html',
  'book'      => ['name' => '忍耐力（The Marshmallow Test）', 'author' => 'Walter Mischel 沃爾特・米歇爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你桌上那顆「一定有人要」，是越盯越甜，還是已經涼到看得清了？',
    'body'    => '米歇爾教你怎麼替一個燙手的誘惑降溫；《痛點》這把尺，幫你認出此刻最該降溫的那顆糖，就是你捨不得拿去驗的「一定有人要」。現在就免費體檢一個點子，五分鐘把那句會發光的話，換算成一個查得到對錯的冷數字——它到底有幾個真人、為它掏過幾塊錢。',
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
    ['name' => '忍耐力',  'path' => '/lens/the-marshmallow-test'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
