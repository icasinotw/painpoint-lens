<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你解掉的那個痛，守不住一輩子：用痛點之尺重讀《瞬時競爭策略》｜痛點 P.A.I.N.',
  'desc'  => '麥奎斯《瞬時競爭策略》戳破策略圈最大的安全感：競爭優勢可以建起來、然後永遠守住。她說優勢是一道道會退潮的浪。用痛點之尺重讀：就算你驗過的痛是真的、市場也賺到了，那張通行證仍有保存期限，逼你定期回頭重驗，並學會從自己的好答案裡撤退。',
  'path'  => '/lens/the-end-of-competitive-advantage',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《瞬時競爭策略》',
  'heading'   => '你解掉的那個痛，守不住一輩子',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-end-of-competitive-advantage.html',
  'book'      => ['name' => '瞬時競爭策略', 'author' => 'Rita Gunther McGrath 莉塔·岡瑟·麥奎斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你現在最賺的那條線，還撐得了多久？',
    'body'    => '麥奎斯說優勢是會退潮的浪。趁它還高，把你最賺的那條線當成一個全新的點子，重新驗一次：那個痛還在嗎、客人還願意付那個價嗎、你的本事還是別人沒有的嗎？五分鐘照出最弱的一格。',
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
    ['name' => '瞬時競爭策略', 'path' => '/lens/the-end-of-competitive-advantage'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
