<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一門二房東生意，怎麼講成 470 億的故事：用痛點之尺重讀《億萬負翁》｜痛點 P.A.I.N.',
  'desc'  => '威德曼寫 WeWork 與亞當・紐曼：一家租辦公室的公司，十年內被吹到 470 億美元，又在財報見光的幾週內垮到剩五分之一。用痛點的眼光重讀：它真正解的痛很小、很實在，卻被一路通膨成「提升全世界意識」的大願景，再用一個自己發明的指標蓋住虧損——沒人逼它低頭把帳算一遍。',
  'path'  => '/lens/billion-dollar-loser',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《億萬負翁》',
  'heading'   => '他把一門二房東生意，講成了一場宗教',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/billion-dollar-loser.html',
  'book'      => ['name' => '億萬負翁：亞當・紐曼與 WeWork 的瘋狂與失控', 'author' => 'Reeves Wiedeman 里夫斯・威德曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個點子，劃掉形容詞之後還站得住嗎？',
    'body'    => '把你最得意的那個點子或計畫，所有「顛覆」「重新定義」「使命」之類的形容詞先全部劃掉，只留三句大白話：它賣什麼、賣給誰、進來的錢蓋不蓋得住出去的錢。剩下那三句要是自己站不住，先別急著往前衝。',
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
    ['name' => '億萬負翁', 'path' => '/lens/billion-dollar-loser'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
