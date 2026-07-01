<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你腦裡開的那場會，全是自己人：用痛點之尺重讀《不當決策》｜痛點 P.A.I.N.',
  'desc'  => '席波尼《不當決策》證明偏誤像視錯覺，你知道了也擋不住，唯一的解是替自己裝一套唱反調的流程。用痛點的眼光看：你評估自己點子時腦裡那場會全是自己人，需求驗證就是你該硬塞進去的那個反對者。',
  'path'  => '/lens/youre-about-to-make-a-terrible-mistake',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《不當決策》',
  'heading'   => '你腦裡開的那場會，全是自己人',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/youre-about-to-make-a-terrible-mistake.html',
  'book'      => ['name' => '不當決策：行為經濟學大師教你避開連專家也不自覺的思考陷阱', 'author' => 'Olivier Sibony（奧利維・席波尼）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你腦裡那場「這點子行不行」的會，開得公正嗎？',
    'body'    => '席波尼證明你一個人評估自己的點子時，腦裡沒有人有動機說不；痛點之尺把「找一個會唱反調的人」收成一條你每次動手前都能自己走一遍的紀律。',
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
    ['name' => '不當決策',  'path' => '/lens/youre-about-to-make-a-terrible-mistake'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
