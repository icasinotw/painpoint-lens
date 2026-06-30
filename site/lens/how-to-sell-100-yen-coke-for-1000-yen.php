<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '可樂能賣千圓，是因為房間裡有個渴的人：用痛點之尺重讀《百圓可樂如何賣千圓》｜痛點 P.A.I.N.',
  'desc'  => '永井孝尚用一罐在飯店賣到十倍價的可樂，把「價值」講到見底：價格的天花板，由對方的痛有多深決定。用痛點之尺補上它略過的那一格——可樂賣千圓的前提，是房間裡先有一個渴到願意付錢的人。',
  'path'  => '/lens/how-to-sell-100-yen-coke-for-1000-yen',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《百圓可樂如何賣千圓》',
  'heading'   => '可樂能賣千圓，是因為房間裡有個渴的人',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/how-to-sell-100-yen-coke-for-1000-yen.html',
  'book'      => ['name' => '百圓可樂如何賣千圓', 'author' => '永井孝尚'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '替你的「可樂」定價之前，先確認有人渴',
    'body'    => '永井教你怎麼照價值定價；但定價之前，得先確認房間裡裝著一個渴到願意付錢的人。花五分鐘，先驗你那個點子到底有沒有人渴。',
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
    ['name' => '百圓可樂如何賣千圓',  'path' => '/lens/how-to-sell-100-yen-coke-for-1000-yen'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
