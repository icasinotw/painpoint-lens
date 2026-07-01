<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一個沒人要的點子，也能讓你興奮半年：用痛點之尺重讀《金融煉金術》｜痛點 P.A.I.N.',
  'desc'  => '索羅斯用「反射」講信心與現實如何互相餵養，讓一個故事因為有人信、就暫時變成真的。用 P.A.I.N. 重讀《金融煉金術》：你對自己點子的興奮也會自己餵自己，唯一造不了假的訊號，是圈外那個陌生人願不願意掏錢。',
  'path'  => '/lens/the-alchemy-of-finance',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《金融煉金術》',
  'heading'   => '一個沒人要的點子，也能讓你興奮半年',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-alchemy-of-finance.html',
  'book'      => ['name' => '金融煉金術', 'author' => 'George Soros 喬治・索羅斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那份興奮，有沒有圈外的地基？',
    'body'    => '《金融煉金術》讓你看見信心會自己餵自己；要跳出迴圈，得有個站在圈外的訊號。花五分鐘，用 P.A.I.N. 把你手上的點子跑一遍，看看它最弱的是哪一軸。',
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
    ['name' => '金融煉金術', 'path' => '/lens/the-alchemy-of-finance'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
