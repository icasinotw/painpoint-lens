<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '公式三句講完，撐過難看那幾年才是門檻：用痛點之尺重讀《超越大盤的獲利公式》｜痛點 P.A.I.N.',
  'desc'  => '葛林布雷的《超越大盤的獲利公式》三句話就把神奇公式講完，剩下大半本書都在勸你：別在它連賠兩三年、看起來最蠢的時候逃走。用痛點的眼光重讀：公式人人抄得走，真正護著你那個點子的，往往是你最想跳過的那一步難受。',
  'path'  => '/lens/the-little-book-that-beats-the-market',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《超越大盤的獲利公式》',
  'heading'   => '公式三句講完，撐過難看那幾年才是門檻',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-little-book-that-beats-the-market.html',
  'book'      => ['name' => '超越大盤的獲利公式', 'author' => 'Joel Greenblatt 喬伊・葛林布雷'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '學會撐住一條公式，下一步先看清你那個點子',
    'body'    => '葛林布雷教你忍住別在最難看的時候逃；你那個還沒動手的點子，缺的是更前面一格——到今天為止，真的有人為它掏過錢嗎。花五分鐘把它攤開照一照，看出你最弱、最沒驗過的那一塊。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '超越大盤的獲利公式',       'path' => '/lens/the-little-book-that-beats-the-market'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
