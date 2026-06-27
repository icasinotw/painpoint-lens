<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點的眼光看《基業長青》：一本你最該「反著讀」的成功故事｜痛點 P.A.I.N.',
  'desc'  => '《基業長青》刨出 18 家百年企業的共同習慣、淬出「造鐘不報時」這些招，卻天生有倖存者偏誤的破口——它只研究得到「飛回來的飛機」。用痛點之尺反著讀：學會問「做了同樣的事卻沒成的有多少」，再把這把懷疑調回你自己的點子上。',
  'path'  => '/lens/built-to-last',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《基業長青》',
  'heading'   => '一本你最該「反著讀」的成功故事',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/built-to-last.html',
  'book'      => ['name' => '基業長青：高瞻遠矚企業的永續之道', 'author' => 'Jim Collins 柯林斯、Jerry Porras 薄樂斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '與其問它會不會長青，先問有沒有人要',
    'body'    => '《基業長青》教你打造能走一百年的公司；《痛點》這把尺，先幫你確認外面真的有人在痛、有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '基業長青',  'path' => '/lens/built-to-last'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
