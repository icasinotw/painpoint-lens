<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《精實UX設計》：一個人時，你最迷戀的交付物其實是整個產品｜痛點 P.A.I.N.',
  'desc'  => '《精實UX設計》把交付物判了死刑，要團隊只認「成果」——使用者的行為有沒有真的改變。用痛點之尺重讀：一個人抱著點子時，你最迷戀的那個交付物其實是整個產品，而最該被當成「成果」去驗的那一格——到底有沒有人痛到願意付代價——你一次都還沒量過。',
  'path'  => '/lens/lean-ux',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精實UX設計》',
  'heading'   => '你把那扇門雕到能照出人影，門後面那棟屋子，還空著',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/lean-ux.html',
  'book'      => ['name' => '精實UX設計（Lean UX）', 'author' => 'Jeff Gothelf 傑夫・高瑟夫（與 Josh Seiden 喬許・賽登 合著）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最得意的那個功能，有沒有讓任何一個真人，做出不一樣的事？',
    'body'    => '《精實UX設計》要你把眼睛從「產出」移到「成果」。花五分鐘，看看你那個點子最沒被驗過的是哪一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '精實UX設計', 'path' => '/lens/lean-ux'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
