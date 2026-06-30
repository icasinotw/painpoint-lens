<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你寫的東西，讀者沒義務讀完｜痛點 P.A.I.N.',
  'desc'  => '洪震宇《精準寫作》教你把報告、提案、email 寫到讀者一次看懂，核心其實是「替讀者寫」。用痛點之尺重讀：寫一篇沒人讀完的東西，跟做一個沒人要的產品，卡在同一個地方——你忙著倒自己想講的，沒先確認讀者要什麼。動筆前，先替你的字做一次需求驗證。',
  'path'  => '/lens/precise-writing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精準寫作》',
  'heading'   => '你寫的東西，讀者沒義務讀完',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/precise-writing.html',
  'book'      => ['name' => '精準寫作：寫作力是你最被低估的競爭力', 'author' => '洪震宇'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你寫的那篇，跟你那個點子，欠的是同一個動作',
    'body'    => '洪震宇要你回到讀者那一邊，把字寫精準；痛點這把尺要你再往前一步——在寫之前，先確認門外真的有人，在等你這件事。',
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
    ['name' => '精準寫作',   'path' => '/lens/precise-writing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
