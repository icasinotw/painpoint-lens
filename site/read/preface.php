<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '前言・讀了近千本商業書，卻全踩了書裡的雷｜《痛點》免費試讀',
  'desc'  => '《痛點》免費試讀・前言。一個讀了近一千本商業書的人，親手創業，卻把書裡第一章就警告的錯全踩了一遍——四年、近五百萬，換來四個動手前該先問自己的問題。',
  'path'  => '/read/preface',
  'type'  => 'article',
];
$reading = [
  'kicker'  => '免費試讀 · 前言',
  'heading' => '前言:讀了近千本商業書,卻全踩了書裡的雷',
  'updated' => '2026-06-23',
  'content' => __DIR__ . '/_content/preface.html',
  'prev'    => null,
  'next'    => ['url' => '/read/ch01', 'label' => '第一章 挑到爛書的那些夜晚'],
];
$page['schema'] = [
  pain_read_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁', 'path' => '/'],
    ['name' => '免費試讀', 'path' => '/read'],
    ['name' => '前言', 'path' => '/read/preface'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
