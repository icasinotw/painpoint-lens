<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最會說故事的人，也賣得掉沒人要的東西：用痛點之尺重讀《故事銷售贏家》｜痛點 P.A.I.N.',
  'desc'  => '《故事銷售贏家》把「會說故事就能成交」拆成一條照著走就能走完的生產線：鉤子、難題、衝突、翻身、行動。用痛點的眼光重讀：故事能讓客戶當場說出「這就是我」，卻不負責確認那聲點頭背後，有沒有一筆早就在等著被解決的痛。',
  'path'  => '/lens/sell-with-a-story',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《故事銷售贏家》',
  'heading'   => '最會說故事的人，也賣得掉沒人要的東西',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/sell-with-a-story.html',
  'book'      => ['name' => '故事銷售贏家', 'author' => 'Paul Smith（保羅・史密斯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個招牌故事，背後真的有人要嗎？',
    'body'    => '史密斯教你把故事說到對方心裡；在你開口以前，先確認那個故事背後，真的站著一個願意掏錢的人。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '故事銷售贏家',     'path' => '/lens/sell-with-a-story'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
