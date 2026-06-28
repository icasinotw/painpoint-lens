<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你替那個點子估的身價，全是別人為故事多付的那一半｜痛點 P.A.I.N.',
  'desc'  => '《約翰柏格投資常識》的柏格，把股市報酬拆成兩半——公司真賺到的，和別人為故事多付的溢價。用痛點之尺重讀：你替那個點子估的身價，簽名的全是不必掏錢的人；把溢價剝掉，剩下那塊真的大於零嗎？',
  'path'  => '/lens/the-little-book-of-common-sense-investing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《約翰柏格投資常識》',
  'heading'   => '你替那個點子估的身價，全是別人為故事多付的那一半',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-little-book-of-common-sense-investing.html',
  'book'      => ['name' => '約翰柏格投資常識', 'author' => '約翰・柏格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正握著一個你很篤定的點子？',
    'body'    => '柏格教投資人剝掉股價裡的溢價、只認公司真賺到的那塊；這個點子，現在就花五分鐘剝一遍，看你估的身價，有多少是別人不必掏錢就給的。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '約翰柏格投資常識',     'path' => '/lens/the-little-book-of-common-sense-investing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
