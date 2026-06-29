<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先把現實說清楚，最後才說謝謝：用痛點之尺重讀《領導者的真正課題》｜痛點 P.A.I.N.',
  'desc'  => '德普雷把領導者的第一份責任，定在一個最不浪漫的動作上：定義現實。用痛點的眼光重讀《領導者的真正課題》——大家都記得後半句溫暖的「當僕人、說謝謝」，卻跳過最前面那句最硬的「先把現實看清楚」；而你最不敢定義的，往往是「到今天為止，有沒有一個陌生人真的為你的點子掏過錢」。',
  'path'  => '/lens/leadership-is-an-art',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《領導者的真正課題》',
  'heading'   => '先把現實說清楚，最後才說謝謝',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/leadership-is-an-art.html',
  'book'      => ['name' => '領導者的真正課題', 'author' => '麥克斯・帝普雷 Max De Pree'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最不敢定義的，是哪一格現實？',
    'body'    => '先別忙著描繪三年後多風光。挑一件你老用樂觀語氣帶過的事，把它現在真實的狀況、連同那個你一直省略的壞消息，用一句話寫下來——這就是德普雷說的，領導者的第一份責任。',
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
    ['name' => '領導者的真正課題', 'path' => '/lens/leadership-is-an-art'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
