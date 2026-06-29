<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '讀完整座商學院，還是少一個說要買的人：用痛點之尺重讀《不花錢讀名校MBA》｜痛點 P.A.I.N.',
  'desc'  => '《不花錢讀名校MBA》把生意拆成五個環，後面四環教得又全又清楚。用痛點之尺補它最前面那一環：有沒有人要、痛夠不夠深——那一環，一本書再厚也得你自己出門問。',
  'path'  => '/lens/the-personal-mba',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《不花錢讀名校MBA》',
  'heading'   => '讀完整座商學院，還是少一個說要買的人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-personal-mba.html',
  'book'      => ['name' => '不花錢讀名校MBA', 'author' => '喬許·考夫曼 Josh Kaufman'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '五個環畫完了，第一環你填得出真人嗎？',
    'body'    => '《不花錢讀名校MBA》教你把生意的五個環想清楚；痛點之尺幫你驗最前面那一環——有沒有人要。挑一個點子，五分鐘照四問跑一遍，看自己卡在第幾環。',
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
    ['name' => '不花錢讀名校MBA',  'path' => '/lens/the-personal-mba'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
