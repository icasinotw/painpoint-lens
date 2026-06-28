<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '獨角獸的產地，是一間故事工廠：用痛點之尺重讀《獨角獸與牠的產地》｜痛點 P.A.I.N.',
  'desc'  => '《獨角獸與牠的產地》是科技記者丹・萊昂斯臥底新創一年的歷險記：公司最用力生產的不是軟體，是關於自己的故事。用痛點的眼光重讀——一群人愛上你的使命，會被你聽成「有人要」；這篇拆解怎麼把對故事的掌聲，跟真實的痛分開來驗。',
  'path'  => '/lens/disrupted',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《獨角獸與牠的產地》',
  'heading'   => '獨角獸的產地，是一間故事工廠',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/disrupted.html',
  'book'      => ['name' => '獨角獸與牠的產地：矽谷新創公司歷險記', 'author' => '丹・萊昂斯（Dan Lyons）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那個故事，底下的痛真不真？',
    'body'    => '《獨角獸與牠的產地》拆的是別人的故事工廠，但同一道題也在你身上。趁你還沒為一個動人的故事押下全部身家，先把你最不敢驗的那個假設，攤開來看清楚。',
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
    ['name' => '獨角獸與牠的產地', 'path' => '/lens/disrupted'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
