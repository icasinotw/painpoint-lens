<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你砸了整個組織，去解一個誤診的痛：用痛點之尺重讀《讓你的脆弱，成就你的強大》｜痛點 P.A.I.N.',
  'desc'  => '傑瑞・科隆納《讓你的脆弱，成就你的強大》只逼領導者回答一個問題：這個我說我不想要的處境，我自己是怎麼一手促成的？用痛點的眼光重讀，這是一次對自己做的需求驗證——別對著一個誤診的痛，砸下整個組織。',
  'path'  => '/lens/reboot',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《讓你的脆弱，成就你的強大》',
  'heading'   => '你砸了整個組織，去解一個誤診的痛',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/reboot.html',
  'book'      => ['name' => '讓你的脆弱，成就你的強大', 'author' => 'Jerry Colonna 傑瑞・科隆納'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個「都是別人的問題」，驗過了嗎？',
    'body'    => '科隆納逼領導者對自己做一次需求驗證；同一套「先確認痛在哪、別對著誤診砸資源」的紀律，也能拿去量你手上正在推的那個點子或決定。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '讓你的脆弱，成就你的強大', 'path' => '/lens/reboot'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
