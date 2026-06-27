<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《80/20 法則》：先圈出那根承重的假設｜痛點 P.A.I.N.',
  'desc'  => '《80/20 法則》教你在既有的生意裡找出真正養活你的那兩成。但一個還沒驗證的點子沒有數據可分析——把 80/20 轉向，從「排產出」改成「排風險」，先圈出那根少了就垮的承重假設：外面到底有沒有人在痛。',
  'path'  => '/lens/the-80-20-principle',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《80/20 法則》',
  'heading'   => '你的點子有一百件事，只有一件是承重柱',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/the-80-20-principle.html',
  'book'      => ['name' => '80/20 法則：商場獲利與生活如意的成功法則', 'author' => 'Richard Koch 理查・柯克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，承重的柱子立了沒？',
    'body'    => '《80/20 法則》幫你在既有的事裡分輕重；《痛點》這把尺，幫你在動手之前先圈出那根少了就垮的假設。現在就免費體檢一個點子，五分鐘找出你最該先立穩的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '80/20 法則', 'path' => '/lens/the-80-20-principle'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
