<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '麥納瑪拉靠數屍體打越戰，你靠數按讚賭上接下來三年｜痛點 P.A.I.N.',
  'desc'  => '《大數據》替「把世界變成數字」鼓掌，卻在談風險那章用麥納瑪拉提醒你「資料的獨裁」——崇拜最好量的數字，把它錯當成最重要的事。用痛點之尺重講 Big Data：你那塊全是讚數的儀表板，缺的正是麥納瑪拉沒數的那一格。',
  'path'  => '/lens/big-data',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大數據》',
  'heading'   => '麥納瑪拉靠數屍體打越戰，你靠數按讚賭上接下來三年',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/big-data.html',
  'book'      => ['name' => '大數據', 'author' => 'Viktor Mayer-Schönberger 麥爾荀伯格、Kenneth Cukier 庫基耶'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那塊儀表板上，缺的是哪一格？',
    'body'    => '《大數據》提醒你別被「最好量的數字」騙了；《痛點》這把尺，幫你看清你那塊全是讚數的儀表板，唯一沒人去填的那一格在哪。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '大數據',    'path' => '/lens/big-data'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
