<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那張計畫全是目標，缺了魯梅特要你先寫的那一句：用痛點之尺重讀《好策略，壞策略》｜痛點 P.A.I.N.',
  'desc'  => '魯梅特把好策略拆成診斷、指導方針、協調一致的行動，最前面也最常被跳過的是「診斷」——先講清你真正卡在哪。用痛點的眼光重讀：你那張寫滿目標的創業計畫正是他說的壞策略，最該擺最前面、卻整張都沒寫的那句診斷，就是「外面到底有沒有人在痛、會掏錢」。',
  'path'  => '/lens/good-strategy-bad-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《好策略，壞策略》',
  'heading'   => '你那張計畫全是目標，缺了魯梅特要你先寫的那一句',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/good-strategy-bad-strategy.html',
  'book'      => ['name' => '好策略，壞策略（Good Strategy / Bad Strategy）', 'author' => 'Richard Rumelt 理查·魯梅特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在排功能、衝數字之前，先寫魯梅特那一行診斷',
    'body'    => '《好策略，壞策略》教你別把目標當策略，先把難題診斷清楚；《痛點》這把尺，幫你把創業版的診斷寫對——外面到底有沒有人在痛、會不會掏錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '好策略，壞策略',  'path' => '/lens/good-strategy-bad-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
