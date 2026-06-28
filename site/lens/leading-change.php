<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最勤奮的那種自滿：用痛點之尺重讀《領導人的變革法則》｜痛點 P.A.I.N.',
  'desc'  => '《領導人的變革法則》科特說變革八九成死在第一步——自滿；而最會偽裝成自滿的，正是沒日沒夜的忙。用痛點的眼光重讀：你為點子拚命做東西，其實在用忙，躲開唯一會要命的那一格——有沒有一個陌生人真的願意為它付錢。',
  'path'  => '/lens/leading-change',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《領導人的變革法則》',
  'heading'   => '科特發現，悶死變革的頭號兇手是自滿——你為那個點子忙到沒日沒夜，那身忙，恰好是最勤奮的一種自滿',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/leading-change.html',
  'book'      => ['name' => '領導人的變革法則（Leading Change）', 'author' => 'John P. Kotter 約翰・科特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個忙到深夜的點子，有沒有一個陌生人在等著付錢？',
    'body'    => '科特說變革都死在沒人肯先面對的現實上；先看看你那個點子最沒被驗過的，是不是「到底有沒有人要」這一格。',
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
    ['name' => '領導人的變革法則', 'path' => '/lens/leading-change'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
