<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一句話，能讓對的人在人海裡回頭：用痛點之尺重讀《為什麼超級業務員都想學文案銷售》｜痛點 P.A.I.N.',
  'desc'  => '川上徹也說連超級業務都該學文案，因為一句寫對的話能把對的人從人海裡叫回頭。用 P.A.I.N. 補上這一招搆不著的那一格——文案叫得回頭，叫不回需要；先確認被你叫住的人本來就缺這個，那句話才有東西可講。',
  'path'  => '/lens/one-line-that-sells',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《為什麼超級業務員都想學文案銷售》',
  'heading'   => '一句話，能讓對的人在人海裡回頭',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/one-line-that-sells.html',
  'book'      => ['name' => '為什麼超級業務員都想學文案銷售', 'author' => '川上徹也'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '被你叫回頭的人，本來就缺這個嗎？',
    'body'    => '川上教你把話磨到讓對的人回頭；在動筆之前，先花五分鐘確認那個人本來就缺你要賣的東西。',
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
    ['name' => '為什麼超級業務員都想學文案銷售', 'path' => '/lens/one-line-that-sells'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
