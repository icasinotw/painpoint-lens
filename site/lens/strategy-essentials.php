<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '賺得到超額利潤的公司，都做了對手學不來的事：用痛點之尺重讀《策略精論 基礎篇》｜痛點 P.A.I.N.',
  'desc'  => '湯明哲《策略精論 基礎篇》把「為什麼有些公司能一直賺錢」追問到見骨：超額利潤來自對手學不來的隔離機制。用痛點之尺重讀：這張「怎麼贏」的地圖，是從「已經有人要你的東西」才開始畫的——還在賭點子的你，得先補上它跳過的最上游那一格。',
  'path'  => '/lens/strategy-essentials',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《策略精論 基礎篇》',
  'heading'   => '賺得到超額利潤的公司，都做了對手學不來的事',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/strategy-essentials.html',
  'book'      => ['name' => '策略精論 基礎篇', 'author' => '湯明哲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在分析「怎麼贏」之前，先確認這場仗有人要你打',
    'body'    => '湯明哲教你怎麼建立並守住競爭優勢；痛點之尺幫你補上它當成起點的那一格——外面到底有沒有人，正為這件事掏錢。花五分鐘免費體檢一個點子，先確認有人要，再來研究怎麼贏。',
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
    ['name' => '策略精論 基礎篇', 'path' => '/lens/strategy-essentials'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
