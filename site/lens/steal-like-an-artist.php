<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你做出了自己最想要的東西，台下卻只坐著你一個｜痛點 P.A.I.N.',
  'desc'  => '克隆《點子都是偷來的》要你做出自己想看的東西——這對藝術家是完美的羅盤，對抱著點子的創業者卻是一張免死金牌。用痛點之尺拆它沒補的那一格：「我自己就想要」是市場給你最不值錢的訊號，真正算數的，是有沒有一個陌生人肯掏錢。',
  'path'  => '/lens/steal-like-an-artist',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《點子都是偷來的》',
  'heading'   => '你做出了自己最想要的東西——台下只坐著你一個人',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/steal-like-an-artist.html',
  'book'      => ['name' => '點子都是偷來的：10個沒人告訴過你的創意撇步', 'author' => 'Austin Kleon 奧斯汀・克隆'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那個「自己超想要」的點子，外面到底有沒有人要？',
    'body'    => '《點子都是偷來的》教你大膽動手，做出自己想看的東西。問題是，外面有沒有別人也想要、肯為它掏錢，這本書沒打算回答。現在就免費體檢一個點子，五分鐘找出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '點子都是偷來的',  'path' => '/lens/steal-like-an-artist'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
