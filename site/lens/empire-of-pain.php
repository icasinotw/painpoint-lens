<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最厲害的賣藥本事，是讓你自己覺得有病：用痛點之尺重讀《疼痛帝國》｜痛點 P.A.I.N.',
  'desc'  => '派崔克・拉登・基夫《疼痛帝國》寫薩克勒家族怎麼把製藥做成帝國。用痛點的眼光重讀：亞瑟・薩克勒把「找痛、解痛」的本事反過來用——先製造痛，再賣解藥。一篇談怎麼分辨「真痛」與「被種出來的痛」的拆書。',
  'path'  => '/lens/empire-of-pain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《疼痛帝國》',
  'heading'   => '最厲害的賣藥本事，是讓你自己覺得有病',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/empire-of-pain.html',
  'book'      => ['name' => '疼痛帝國', 'author' => '派崔克・拉登・基夫（Patrick Radden Keefe）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你要解的痛，是本來就在，還是被種出來的？',
    'body'    => '在把一個點子做大之前，先花五分鐘，把「到底有誰、真的正為這件事痛著、痛到願意付錢」一格一格驗過一遍，別等市場替你回答。',
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
    ['name' => '疼痛帝國',  'path' => '/lens/empire-of-pain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
