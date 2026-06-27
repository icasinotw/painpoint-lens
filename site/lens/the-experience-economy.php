<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你蓋了一座完美的舞台，台下一個觀眾都沒有：用痛點之尺重讀《體驗經濟時代》｜痛點 P.A.I.N.',
  'desc'  => '《體驗經濟時代》教你爬上價值階梯、把東西做成讓人甘願買票進場的體驗，甚至敢收入場費。但用痛點的眼光重讀：這座手扶梯從第二層才起跳，它預設樓下早就站著想要的人。最貴的失敗，是把一個沒人要的核心，用最高的成本蓋成一座沒人進場的空舞台——先確認地板上站著人，再往上搭。',
  'path'  => '/lens/the-experience-economy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《體驗經濟時代》',
  'heading'   => '你蓋了一座完美的舞台，台下一個觀眾都沒有',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-experience-economy.html',
  'book'      => ['name' => '體驗經濟時代：人們正在追尋更多意義，更多感受', 'author' => 'B. Joseph Pine II、James H. Gilmore 約瑟夫・派恩、詹姆斯・吉爾摩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你動手搭那座體驗舞台之前',
    'body'    => '《體驗經濟時代》教你把東西一階一階往上抬、做成讓人甘願買票進場的體驗；《痛點》這把尺，幫你先確認舞台底下那塊地板上，真的站著一群想進場的人。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '體驗經濟時代', 'path' => '/lens/the-experience-economy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
