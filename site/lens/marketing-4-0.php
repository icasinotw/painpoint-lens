<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你想要的那種鐵粉，現在正替別人免費宣傳：用痛點之尺重讀《行銷4.0》｜痛點 P.A.I.N.',
  'desc'  => '《行銷4.0》把客人從認知、訴求、詢問、行動到倡導畫成一張 5A 地圖，終點是讓客人自動替你拉客。但地圖從第二站「認知」才起筆，預設外面已經有人要。用痛點的眼光重讀：他要你跑完全程才換到的「倡導」，其實是真有人在痛最硬的證據，而你能更早、更便宜地讀到它。',
  'path'  => '/lens/marketing-4-0',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《行銷4.0》',
  'heading'   => '你想要的那種鐵粉，現在正替別人免費宣傳',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/marketing-4-0.html',
  'book'      => ['name' => '行銷4.0：新虛實融合時代贏得顧客的全思維（Marketing 4.0）', 'author' => 'Philip Kotler 菲利浦·科特勒、Hermawan Kartajaya、Iwan Setiawan'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在鋪客人旅程之前，先確認起點站著人',
    'body'    => '《行銷4.0》教你把客人從認知一路帶到倡導；《痛點》這把尺，幫你先確認這條路的起點到底有沒有人在痛、會不會掏錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '行銷4.0',  'path' => '/lens/marketing-4-0'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
