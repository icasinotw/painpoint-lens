<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '有一種痛，拿掉就把意義一起拿掉了：用痛點之尺重讀《有多痛，就有多值得》｜痛點 P.A.I.N.',
  'desc'  => '布倫《有多痛，就有多值得》發現，人會付錢解決痛，也會排隊付錢去買痛——馬拉松、健身、自己動手，挑的都是會痛的事。用痛點的眼光重讀：動手解一個痛之前，先分清楚它是人們想擺脫的苦，還是人們其實甘願享受的苦，後者解掉就把人要的東西一起解掉了。',
  'path'  => '/lens/the-sweet-spot',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《有多痛，就有多值得》',
  'heading'   => '有一種痛，拿掉就把意義一起拿掉了',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-sweet-spot.html',
  'book'      => ['name' => '有多痛，就有多值得', 'author' => '保羅・布倫（Paul Bloom）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正要解的那個痛，是人們想擺脫的，還是他們其實在買的？',
    'body'    => '布倫《有多痛，就有多值得》提醒你，有一大類痛人們掏錢去買；動手拿掉一個痛之前，先分清楚你面對的是哪一種。',
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
    ['name' => '有多痛，就有多值得',  'path' => '/lens/the-sweet-spot'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
