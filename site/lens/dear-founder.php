<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '再好的創業忠告，也救不回一個沒人要的點子：用痛點之尺重讀《Dear Founder》｜痛點 P.A.I.N.',
  'desc'  => '《Dear Founder》是 eBay 前營運長梅納德・韋伯寫給創業者的一整疊信，陪你扛過裁員、募資、低潮這些開船以後的難關。用痛點的眼光重讀：這些信都從「你已經在跑了」開始接手，卻獨缺最前面那一封——離港之前，先確認你要去的那座島上，真的有人在等。',
  'path'  => '/lens/dear-founder',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《Dear Founder》',
  'heading'   => '再好的創業忠告，也救不回一個沒人要的點子',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/dear-founder.html',
  'book'      => ['name' => 'Dear Founder：給創業者的信', 'author' => '梅納德・韋伯 Maynard Webb'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，離港前確認過對岸有人嗎？',
    'body'    => '韋伯的信教你把船開好；《痛點》這把尺，幫你在離港前先確認對岸有沒有人在等。挑一個你正在養的點子，五分鐘跑一遍，找出那個願意為它掏錢的人到底在不在。',
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
    ['name' => 'Dear Founder', 'path' => '/lens/dear-founder'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
