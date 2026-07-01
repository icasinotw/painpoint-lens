<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你戒不掉手機，因為它把你研究得太透：用痛點之尺重讀《和手機分手的智慧》｜痛點 P.A.I.N.',
  'desc'  => '凱薩琳・普萊斯帶你繞到手機設計者的背後，看你是怎麼被算得死死的。用痛點的眼光重讀：手機是史上把需求驗證做得最滿的一件產品，它拿你每個空檔的痛當考題、一題一題解到你放不了手。這禮拜，把你的螢幕時間挖成一個看得見的數字。',
  'path'  => '/lens/how-to-break-up-with-your-phone',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《和手機分手的智慧》',
  'heading'   => '你戒不掉手機，因為它把你研究得太透',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/how-to-break-up-with-your-phone.html',
  'book'      => ['name' => '和手機分手的智慧', 'author' => 'Catherine Price'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手機把你算得死死的，你能不能反過來算它一次',
    'body'    => '手機比你自己更早知道你什麼時候會伸手；痛點這把尺要你把那個代價換算成一個看得見、再也裝不了看不見的數字。都是同一個動作：先把痛算清楚，你才真的有得選。',
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
    ['name' => '和手機分手的智慧',  'path' => '/lens/how-to-break-up-with-your-phone'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
