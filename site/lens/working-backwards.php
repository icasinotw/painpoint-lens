<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把顧客的讚美，寫在他出現之前：用痛點之尺重讀《亞馬遜逆向工作法》｜痛點 P.A.I.N.',
  'desc'  => '《亞馬遜逆向工作法》最出名的一招，是動工前先替新產品寫一張新聞稿、一份問答（PR／FAQ），逼自己從顧客那頭開始想。用痛點的眼光重讀：那張新聞稿是在會議室裡、寫給一個還不存在的顧客看的，它考的是你會不會把故事講圓，量不到門外到底有沒有人在排隊。連亞馬遜用同一套方法都做出過慘賠的 Fire Phone——它賠得起寫錯，你賠不起。動工前，先去找那個願意自己走過來的真人。',
  'path'  => '/lens/working-backwards',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《亞馬遜逆向工作法》',
  'heading'   => '你把顧客的讚美，寫在他出現之前',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/working-backwards.html',
  'book'      => ['name' => '亞馬遜逆向工作法', 'author' => '柯林・布萊爾、比爾・卡爾（Colin Bryar & Bill Carr）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先寫新聞稿之前，先確認門外有人',
    'body'    => '《亞馬遜逆向工作法》教你動工前先把新產品的新聞稿寫好；痛點這把尺，幫你補上那張稿子量不到的一格——願意自己走過來、肯為這個痛掏錢的人，到底有沒有、夠不夠。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
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
    ['name' => '亞馬遜逆向工作法',  'path' => '/lens/working-backwards'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
