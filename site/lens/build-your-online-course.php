<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把課錄好之前，先確認外面有人在等：用痛點之尺重讀《每個人都能打造線上課！》｜痛點 P.A.I.N.',
  'desc'  => '露西・格里菲斯教你別等準備好就開課、先預售先驗證，這份清醒值得記下。但她沒逼你回答最狠的那一格：有沒有一個你叫得出處境的人，正為這件事掏錢找解法？用痛點的眼光重讀《每個人都能打造線上課！》——「想學的人很多」不是答案，先看他已經為這個痛花過什麼錢；這禮拜先寫一句話、找三個真痛的人，再碰錄影軟體。',
  'path'  => '/lens/build-your-online-course',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《每個人都能打造線上課！》',
  'heading'   => '把課錄好之前，先確認外面有人在等',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/build-your-online-course.html',
  'book'      => ['name' => '每個人都能打造線上課！', 'author' => '露西・格里菲斯（Lucy Griffiths）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '錄影之前，先確認外面有人在等',
    'body'    => '挑你心裡那個「總有一天要開」的課，先別研究要買哪支麥克風。寫下這堂課要幫哪一個你叫得出處境的人、解掉他正用笨方法硬撐的哪個痛，再去找三個真實存在的人，問他們現在為這件事花了多少。兩件事做完，你就知道這堂課現在站不站得住。',
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
    ['name' => '每個人都能打造線上課！', 'path' => '/lens/build-your-online-course'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
