<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別把「沒人要」，聽成「還沒紅」：用痛點之尺重讀《引爆趨勢》｜痛點 P.A.I.N.',
  'desc'  => '《引爆趨勢》讓你相信，東西沒紅只是「還沒到引爆點」——再找對幾個人、再黏一點、環境再對一點就好。但這個說法最危險的副作用，是把「沒人要」一路改寫成「還沒紅」。用痛點的眼光重讀：傳開之前，先確認真的有人在痛、有人要。',
  'path'  => '/lens/the-tipping-point',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《引爆趨勢》',
  'heading'   => '別把「沒人要」，聽成「還沒紅」',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/the-tipping-point.html',
  'book'      => ['name' => '引爆趨勢（The Tipping Point：How Little Things Can Make a Big Difference）', 'author' => 'Malcolm Gladwell 麥爾坎·葛拉威爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在找引爆點之前，先確認有東西值得引爆',
    'body'    => '《引爆趨勢》教你怎麼讓一個東西傳開；痛點這把尺，幫你先回答它跳過的那一題——底下到底有沒有人在痛、會不會掏錢。花五分鐘免費體檢一個點子，看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '引爆趨勢',  'path' => '/lens/the-tipping-point'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
