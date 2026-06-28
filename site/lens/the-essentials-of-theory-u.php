<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《U型理論精要》',
  'desc'  => '《U型理論精要》要你沿著 U 字往下潛：先到現場看見、感知真實的人，潛到 U 底才碰得到那個正在浮現的未來。用痛點的眼光重讀：你那句「一定有人要」，是在腦子裡走完了整趟 U，跳過了看見和感知——它還停在夏默說的最淺一關「下載」：一個舊念頭換了身新衣服，坐上了未來的位子。',
  'path'  => '/lens/the-essentials-of-theory-u',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《U型理論精要》',
  'heading'   => '夏默要你走下 U 型、到現場去看去聽；你那趟 U，從頭到尾只在自己腦子裡走完',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-essentials-of-theory-u.html',
  'book'      => ['name' => 'U型理論精要（The Essentials of Theory U: Core Principles and Applications）', 'author' => 'C. Otto Scharmer 奧圖・夏默'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在替那個點子臨在之前，先讓它見一個真人',
    'body'    => '夏默的下潛沒有一關能在腦子裡完成——看見和感知，都得走到現場。挑點子裡最像商品的一塊，開個價，找一個不欠你人情的陌生人，看他掏不掏錢；那才是你整趟 U 真正的第一步。',
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
    ['name' => 'U型理論精要',  'path' => '/lens/the-essentials-of-theory-u'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
