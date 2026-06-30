<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把「顧客首選」寫成一個你敢下注的數字：用痛點之尺重讀《強勢品牌成長學》｜痛點 P.A.I.N.',
  'desc'  => '王直上《強勢品牌成長學》用行為經濟學解釋顧客為何只伸手抓最眼熟、最不費力的那個。用痛點之尺重讀：這套心理機制太會「事後解釋」、反而騙過你自己；搶「顧客首選」之前，先把那個「想到就買」的觸發情境，壓成一個你算得出頻率、敢下注的數字。',
  'path'  => '/lens/strong-brand-growth',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《強勢品牌成長學》',
  'heading'   => '把「顧客首選」寫成一個你敢下注的數字',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/strong-brand-growth.html',
  'book'      => ['name' => '強勢品牌成長學：從行為經濟學解盲消費心理，關鍵六步驟打造顧客首選品牌', 'author' => '王直上'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你要搶的那個位子，有沒有人在排隊？',
    'body'    => '《強勢品牌成長學》教你怎麼被顧客第一個想起；痛點這把尺，只幫你先確認那個「想到就買」的情境，到底多久發生一次、值不值得你搶。花五分鐘，把你最想佔的那個位子跑一遍。',
    'primary' => ['url' => '/tool', 'label' => '免費跑一次痛點體檢'],
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
    ['name' => '強勢品牌成長學',  'path' => '/lens/strong-brand-growth'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
