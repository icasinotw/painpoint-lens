<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '電梯太慢的答案，是一面鏡子：用痛點之尺重讀《你問對問題了嗎？》｜痛點 P.A.I.N.',
  'desc'  => '住戶嫌電梯太慢，維戴爾-維德斯柏沒換電梯，只在門口裝了一面鏡子，抱怨就消失了——他們受不了的是乾等，不是慢。用痛點之尺重讀《你問對問題了嗎？》：創業者最貴的死法，是把一個框錯的問題執行得很漂亮；動手之前，先確認你流血流汗要解的，是不是真有人在痛的那一個。',
  'path'  => '/lens/whats-your-problem',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《你問對問題了嗎？》',
  'heading'   => '電梯太慢的答案，是一面鏡子',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/whats-your-problem.html',
  'book'      => ['name' => '你問對問題了嗎？：重組問題框架，化解日常生活、職場決策的難題', 'author' => 'Thomas Wedell-Wedellsborg（湯馬斯・維戴爾-維德斯柏）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在解的那個問題，是真的問題，還是你抄錯的那道題？',
    'body'    => '維戴爾教你重組框架，先確認題目對不對；《痛點》這把尺，幫你把同樣的確認用在自己的點子上。現在就免費體檢一個點子，五分鐘看清你最篤定的那一格是不是還空著。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '你問對問題了嗎？',  'path' => '/lens/whats-your-problem'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
