<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最要命的那件工作，你從沒替它開過一張工單：用痛點之尺重讀《鳳凰專案》｜痛點 P.A.I.N.',
  'desc'  => '《鳳凰專案》教 IT 團隊把看不見的工作攤上牆、找出真正卡住全局的瓶頸。用痛點的眼光重讀：你一個人做點子，最該開卡的那件工作——確認真的有人要——卻從沒被放上牆，每天輸給那些看得見的建造。',
  'path'  => '/lens/the-phoenix-project',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《鳳凰專案》',
  'heading'   => '你那個點子最要命的一件，從沒被開成工單',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-phoenix-project.html',
  'book'      => ['name' => '鳳凰專案（The Phoenix Project）', 'author' => 'Gene Kim 金恩（與 Kevin Behr、George Spafford 合著）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個越做越多的點子，有沒有人在排隊等著買單？',
    'body'    => '《鳳凰專案》教你把看不見的工作攤到牆上、找出真正卡住全局的那一格。先看看你那個點子最沒被驗過的，是不是「到底有沒有人要」這一張卡。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '鳳凰專案',   'path' => '/lens/the-phoenix-project'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
