<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '第一章 挑到爛書的那些夜晚｜《痛點》免費試讀',
  'desc'  => '《痛點》免費試讀・第一章。痛點最實在的樣子不是情緒，是一筆算得出來的代價——時間與錢。但「我痛」只證明世上至少有一個人在乎，那個人是你；還有沒有第二個，是另一個問題。',
  'path'  => '/read/ch01',
  'type'  => 'article',
];
$reading = [
  'kicker'  => '免費試讀 · 第一章',
  'heading' => '第一章 挑到爛書的那些夜晚',
  'updated' => '2026-06-23',
  'content' => __DIR__ . '/_content/ch01.html',
  'prev'    => ['url' => '/read/preface', 'label' => '前言'],
  'next'    => ['url' => '/read/pain-framework', 'label' => 'P.A.I.N. 框架總覽'],
];
$page['schema'] = [
  pain_read_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁', 'path' => '/'],
    ['name' => '免費試讀', 'path' => '/read'],
    ['name' => '第一章 挑到爛書的那些夜晚', 'path' => '/read/ch01'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
