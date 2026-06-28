<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子滿手的讚，是頂大帽子，底下沒有半頭牛｜痛點 P.A.I.N.',
  'desc'  => '《原來有錢人都這麼做》的史丹利發現，最敢扮闊的人多半最窮，他叫這「大帽子，底下沒有牛」。用痛點之尺重讀：你那個點子滿手的讚和「我會買」就是那頂大帽子，底下那頭牛——真的掏錢的陌生人——你還沒養到半頭。',
  'path'  => '/lens/the-millionaire-next-door',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《原來有錢人都這麼做》',
  'heading'   => '那頂大帽子底下，沒有一頭會掏錢的牛',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-millionaire-next-door.html',
  'book'      => ['name' => '原來有錢人都這麼做（The Millionaire Next Door）', 'author' => 'Thomas Stanley 湯瑪斯・史丹利、William Danko 威廉・丹柯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個你很篤定、卻還沒人付錢的點子？',
    'body'    => '史丹利量的是淨值、不是門面；這個點子也值得你照同一把尺量一次——把所有讚和點頭擱一邊，看真正掏過錢的陌生人有幾個。',
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
    ['name' => '原來有錢人都這麼做',     'path' => '/lens/the-millionaire-next-door'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
