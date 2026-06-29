<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '鼓聲一停，花就砸在跑最慢的人手裡：用痛點之尺重讀《金融投機史》｜痛點 P.A.I.N.',
  'desc'  => '錢思樂《金融投機史》把三百年的金融狂熱排成一線，從鬱金香、南海泡沫到日本泡沫，玩法都是同一場擊鼓傳花。用痛點的眼光重讀：你跳進一件事，是因為它本身對你有價值，還是只因為後面看起來還有人會接手？',
  'path'  => '/lens/devil-take-the-hindmost',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《金融投機史》',
  'heading'   => '鼓聲一停，花就砸在跑最慢的人手裡',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/devil-take-the-hindmost.html',
  'book'      => ['name' => '金融投機史（Devil Take the Hindmost: A History of Financial Speculation）', 'author' => '愛德華・錢思樂 Edward Chancellor'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂泡沫的劇本之後，回頭看看你自己手上那件事',
    'body'    => '錢思樂讓你認得「後面還有人接手」的故事長什麼樣；你正準備投入的那件事，靠的是真價值，還是同一個故事？把它攤開來照一照，看看你最常拿來說服自己的那個理由站不站得住。',
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
    ['name' => '金融投機史', 'path' => '/lens/devil-take-the-hindmost'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
