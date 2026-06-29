<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '冷啟動:怎麼找到第一批用戶?用手工,別急著投廣告｜痛點之尺',
  'desc'  => '冷啟動最難的不是把產品做出來,是讓第一批人願意用。教你用「無法規模化」的笨方法一個一個請進來、回到痛發生的地方(訪談過的人、負評區)找人、鎖定最小可行受眾,並說明為什麼沒摸到 PMF 前砸廣告只是加速燒錢。',
  'path'  => '/guide/find-first-customers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · 冷啟動',
  'heading'   => '冷啟動:怎麼找到第一批用戶',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/find-first-customers.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '找人之前,先確認你的「誰在痛」夠具體',
    'body'    => '第一批人來自痛得最明顯的那一小群。把點子放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘看出你的「誰在痛」是不是還太模糊。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/guide/validate-startup-idea', 'label' => '回到:如何驗證創業點子'],
  ],
  'prev'      => ['url' => '/guide/pricing-strategy', 'label' => '定價怎麼定?'],
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '冷啟動找第一批用戶', 'path' => '/guide/find-first-customers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
