<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '免去了所有人的同意，你獨缺市場那一句：用痛點之尺重讀《納瓦爾寶典》｜痛點 P.A.I.N.',
  'desc'  => '納瓦爾說程式碼與媒體是「不必經誰同意」的槓桿，讓你跳過老闆、銀行、每一個守門人。用痛點的眼光重讀《納瓦爾寶典》：還有一個守門人，再猛的槓桿也替你跳不過——那個會掏錢的人。槓桿是放大器，餵它沒人要的東西，它只會零成本地把「沒人要」複製給全世界。',
  'path'  => '/lens/the-almanack-of-naval-ravikant',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《納瓦爾寶典》',
  'heading'   => '免去了所有人的同意，你獨缺市場那一句',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-almanack-of-naval-ravikant.html',
  'book'      => ['name' => '納瓦爾寶典', 'author' => 'Eric Jorgenson 艾瑞克・喬根森（彙編 Naval Ravikant 納瓦爾・拉維肯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你準備拿槓桿去放大的那個東西，驗過外面有沒有人要了嗎？',
    'body'    => '納瓦爾給了你「不必經誰同意」的槓桿，剩最後一道關卡——那個會掏錢的人肯不肯點頭——還是得你自己走出門去討。《痛點》這把尺，幫你在按下放大鍵之前，先看出最沒被代價驗過的那一軸。現在就免費體檢一個點子，五分鐘看出最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '納瓦爾寶典', 'path' => '/lens/the-almanack-of-naval-ravikant'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
