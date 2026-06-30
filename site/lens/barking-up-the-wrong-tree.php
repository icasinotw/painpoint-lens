<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《成功不再跌跌撞撞》｜痛點 P.A.I.N.',
  'desc'  => '教育心理學家追蹤幾十位全校第一名，發現他們日子過得體面，卻極少是攪動一個領域的人——學校獎勵的乖巧，真實世界並不照單買。用痛點的眼光重讀：把「有沒有人要」這把尺對準你自己，你拚命磨的那個面面俱到，在你站的場子真的有人要嗎？',
  'path'  => '/lens/barking-up-the-wrong-tree',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《成功不再跌跌撞撞》',
  'heading'   => '全校第一名，為什麼很少改變世界',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/barking-up-the-wrong-tree.html',
  'book'      => ['name' => '成功不再跌跌撞撞（Barking Up the Wrong Tree）', 'author' => 'Eric Barker 艾瑞克・巴克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你拚命磨的那個「好」，有人要嗎',
    'body'    => '把自己磨成哪裡都及格，聽起來安全，卻容易做成一支「人人都還可以、但沒人非要不可」的產品；先去找那個剛好缺你這一味的場子，再決定要把力氣投在哪一格。',
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
    ['name' => '成功不再跌跌撞撞', 'path' => '/lens/barking-up-the-wrong-tree'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
