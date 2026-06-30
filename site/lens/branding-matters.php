<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '品牌是利息,先確認你有那筆本金｜痛點 P.A.I.N.',
  'desc'  => '黃文博《品牌大學問》把品牌從天上拿下來,放回客人腦袋裡:品牌是客人記得你、預期你的那套記憶。用痛點之尺重讀:這本書站在一個沒說破的前提上——你手上已經有個值得客人回頭的東西。品牌是利息,動手累積之前,先確認你有那筆「真有人要」的本金。',
  'path'  => '/lens/branding-matters',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《品牌大學問》',
  'heading'   => '品牌是利息,先確認你有那筆本金',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/branding-matters.html',
  'book'      => ['name' => '品牌大學問', 'author' => '黃文博'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先確認有人要,再談品牌',
    'body'    => '黃文博教你顧好客人對你的記憶,把信任一塊一塊存起來;痛點這把尺要你再往前站一步——在花品牌錢之前,先確認門外真的有人,願意一次又一次回來買你這個東西。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '品牌大學問', 'path' => '/lens/branding-matters'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
