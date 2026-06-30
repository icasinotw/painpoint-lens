<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '畫一個小圈，圈外再香的機會都不碰：用痛點之尺重讀《投資心智》｜痛點 P.A.I.N.',
  'desc'  => '《投資心智》最該帶走的，不是哪支明牌，是丹妮爾的爸菲爾・湯恩教她畫的那條「能力圈」——只碰你真懂的那一小撮，圈外再香都不碰，圈內也得等價格打到骨折、留足安全邊際才出手。用痛點的眼光重讀這本書：把下注範圍縮到自己罩得住的窄圈，正是痛點之尺對你錢包做的同一個動作。',
  'path'  => '/lens/invested',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《投資心智》',
  'heading'   => '畫一個小圈，圈外再香的機會都不碰',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/invested.html',
  'book'      => ['name' => '投資心智（Invested）', 'author' => 'Danielle Town 丹妮爾・湯恩、Phil Town 菲爾・湯恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那張，你說得出它為什麼賺錢嗎',
    'body'    => '挑一檔你正抱著、或正想跟著別人上車的標的，逼自己用三句白話講清楚：它靠什麼把錢賺進口袋、未來五年誰最可能掀掉它、現在的價格比你估的便宜還是貴。任何一題卡住，它就還站在你的能力圈外。',
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
    ['name' => '投資心智',   'path' => '/lens/invested'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
