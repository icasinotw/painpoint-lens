<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '在紙上長得最整齊的那片森林，最先枯死：用痛點之尺重讀《國家的視角》｜痛點 P.A.I.N.',
  'desc'  => '斯科特在《國家的視角》用一片「紙上完美、幾年後枯死」的德國森林，講穿由上而下大計畫的死法：為了整齊，把撐著一切運轉的「亂」給刪了。用痛點的眼光重讀：你那份無懈可擊的商業計畫書，就是那張產量表——被你當雜訊刪掉的客戶真實行為，才是生意能不能活的地基。',
  'path'  => '/lens/seeing-like-a-state',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《國家的視角》',
  'heading'   => '在紙上長得最整齊的那片森林，最先枯死',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/seeing-like-a-state.html',
  'book'      => ['name' => '國家的視角（Seeing Like a State: How Certain Schemes to Improve the Human Condition Have Failed）', 'author' => 'James C. Scott 詹姆斯・斯科特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把「下去撿那層腐葉」這個動作，用在你的點子上',
    'body'    => '斯科特提醒你：一份太整齊的計畫，是靠刪掉現場那些「亂」才變得那麼好看的；痛點這把尺，把同一件事用回你手上那個點子——別再對著漂亮的試算表改到深夜，先走到真人面前，看他們實際上怎麼解這個問題。',
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
    ['name' => '國家的視角',     'path' => '/lens/seeing-like-a-state'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
