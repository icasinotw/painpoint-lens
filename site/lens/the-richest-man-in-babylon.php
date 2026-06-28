<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把「找個陌生人付錢」排到了隊伍最後，而那一格從來輪不到｜痛點 P.A.I.N.',
  'desc'  => '《巴比倫致富聖經》的阿卡德致富靠一個「先」字：每賺十塊，先留一塊給自己，剩下才過日子。用痛點之尺重讀：你那個點子，把時間和熱情先付給了想像中的用戶，唯獨「讓陌生人真的掏錢」那一關排到最後——而排到最後的事，從來輪不到。',
  'path'  => '/lens/the-richest-man-in-babylon',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《巴比倫致富聖經》',
  'heading'   => '你把「找個陌生人付錢」排到了隊伍最後，而那一格從來輪不到',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-richest-man-in-babylon.html',
  'book'      => ['name' => '巴比倫致富聖經（The Richest Man in Babylon）', 'author' => 'George Clason 喬治・克拉森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個你很篤定、卻還沒人付錢的點子？',
    'body'    => '阿卡德先撥走一成、剩下的才過日子；這個點子也值得你照同一個順序排一次——把「找個陌生人真的掏錢」這一關，挪到所有事情的最前面。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '巴比倫致富聖經',         'path' => '/lens/the-richest-man-in-babylon'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
