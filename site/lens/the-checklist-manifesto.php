<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那張創業清單，最該寫的第一行永遠空著：用痛點之尺重讀《清單革命》｜痛點 P.A.I.N.',
  'desc'  => '葛文德在《清單革命》裡證明，複雜工作裡害死你的不是無知，是跳過那個你覺得「這還用說」的步驟。用痛點的眼光重讀：每個創業者的清單上，被跳過的那一行都是「確認有沒有人要」——它就是創業版的洗手。',
  'path'  => '/lens/the-checklist-manifesto',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《清單革命》',
  'heading'   => '你那張創業清單，最該寫的第一行永遠空著',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-checklist-manifesto.html',
  'book'      => ['name' => '清單革命：不犯錯的祕密武器', 'author' => 'Atul Gawande 阿圖・葛文德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的點子，那一行洗手項填得上數字嗎？',
    'body'    => '《清單革命》教你把複雜的事做對；《痛點》這把尺，幫你先確認那件事值不值得做。現在就免費體檢一個點子，五分鐘標出你最沒底、最該第一個去收錢的那一格；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '清單革命',  'path' => '/lens/the-checklist-manifesto'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
