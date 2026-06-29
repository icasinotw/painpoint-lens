<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那頂搭在停車場的帳篷，才是真正的賭注：用痛點之尺重讀《權力遊戲》｜痛點 P.A.I.N.',
  'desc'  => '希金斯的《權力遊戲》寫的不是馬斯克瀟灑下注的瞬間，是特斯拉一次次燒到只剩幾週現金、差點倒掉的十幾年。用痛點的眼光重讀：別被「世紀豪賭」這個漂亮劇本騙——真正的賭注是一疊算得出來的帳單，下注前先逼自己算清楚，現金到底還能撐幾個月。',
  'path'  => '/lens/power-play',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《權力遊戲》',
  'heading'   => '那頂搭在停車場的帳篷，才是真正的賭注',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/power-play.html',
  'book'      => ['name' => '權力遊戲', 'author' => 'Tim Higgins（提姆・希金斯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在醞釀的那場賭，現金能撐幾個月？',
    'body'    => '趁還沒掀牌，先算一個很不浪漫的數字：假如接下來收入整整掛零，你手上的現金撐得了幾個月。撐得過這道題再下注，是這本書最能借你的一課。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '權力遊戲',       'path' => '/lens/power-play'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
