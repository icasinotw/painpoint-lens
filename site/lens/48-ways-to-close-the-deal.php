<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '四十八招使盡，你還是不知道他到底痛不痛：用痛點之尺重讀《成功拿下訂單48招頂尖業務銷售技巧》｜痛點 P.A.I.N.',
  'desc'  => '山田和裕把「會賣」拆成四十八個照著做就能練的動作，從拜訪前的功課到成交後的跟進，編號清楚、土法煉鋼。用痛點的眼光重讀：這四十八招全從「對面那個人已經在痛」算起，卻缺了一招第零招——在你決定賣什麼之前，先確認那個痛真的存在、夠深，有人肯為它掏錢。',
  'path'  => '/lens/48-ways-to-close-the-deal',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《成功拿下訂單48招頂尖業務銷售技巧》',
  'heading'   => '四十八招使盡，你還是不知道他到底痛不痛',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/48-ways-to-close-the-deal.html',
  'book'      => ['name' => '成功拿下訂單48招頂尖業務銷售技巧', 'author' => '山田和裕'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '招式練到頂，水裡也得先有魚',
    'body'    => '山田教你把成交那條線從頭走到底；在你苦練收線的手藝以前，先確認腳下這片水裡，真的有一條為這個痛在游的魚。花五分鐘免費體檢一個點子，看出你最弱的那一格。',
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
    ['name' => '成功拿下訂單48招頂尖業務銷售技巧', 'path' => '/lens/48-ways-to-close-the-deal'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
