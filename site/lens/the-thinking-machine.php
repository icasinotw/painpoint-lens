<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '離倒閉只剩三十天，黃仁勳講了三十年：用痛點之尺重讀《黃仁勳傳》｜痛點 P.A.I.N.',
  'desc'  => '史帝芬・維特寫的《黃仁勳傳》，通篇最常出現的不是宏大願景，是一句講了三十年的「公司離倒閉只剩三十天」。用痛點的眼光重讀：贏家傳記最危險的，是把「活下來」當成可以照抄的公式——黃仁勳真正做對的那一手，是在 CUDA 賭局裡認出了一群真的在痛、真的在掏錢的人。',
  'path'  => '/lens/the-thinking-machine',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《黃仁勳傳》',
  'heading'   => '離倒閉只剩三十天，黃仁勳講了三十年',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-thinking-machine.html',
  'book'      => ['name' => '黃仁勳傳（The Thinking Machine）', 'author' => '史帝芬・維特 Stephen Witt'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在燒的那件事，底下站著的是人，還是劇本？',
    'body'    => '黃仁勳每次賭，腳底下都站著一群真的在痛、在掏錢的人。挑一個你正在燒時間燒錢的點子，五分鐘跑一遍，看清它底下站的是真的有人，還是你自己搭起來的空台。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '黃仁勳傳', 'path' => '/lens/the-thinking-machine'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
