<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '幾十億美元，買的是一個沒人願意查的劇本：用痛點之尺重讀《鯨吞億萬》｜痛點 P.A.I.N.',
  'desc'  => '兩位《華爾街日報》記者還原劉特佐如何從馬來西亞 1MDB 主權基金搬走幾十億美元。用痛點之尺重讀《鯨吞億萬》：一個夠漂亮的劇本，能讓所有人都忘了走到後台看一眼底下有沒有真東西——把你計畫裡「借來的可信」全遮掉，它還站得住嗎？',
  'path'  => '/lens/billion-dollar-whale',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《鯨吞億萬》',
  'heading'   => '幾十億美元，買的是一個沒人願意查的劇本',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/billion-dollar-whale.html',
  'book'      => ['name' => '鯨吞億萬（Billion Dollar Whale）', 'author' => 'Tom Wright 湯姆・萊特、Bradley Hope 布萊利・霍普'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把你最看好的那個計畫，光環全遮掉，它還站得住嗎？',
    'body'    => '拿出你現在最看好的一個產品、提案或投資，把它身上所有「借來的可信」——大公司客戶、名人背書、「連誰都在做」——先用手遮住，再問一句：光憑它自己，有人真的需要、真的願意掏錢嗎？',
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
    ['name' => '鯨吞億萬', 'path' => '/lens/billion-dollar-whale'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
