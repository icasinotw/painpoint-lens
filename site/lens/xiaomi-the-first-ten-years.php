<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把會嫌你的人，請進你做產品的房間：用痛點之尺重讀《一往無前》｜痛點 P.A.I.N.',
  'desc'  => '范海濤《一往無前：雷軍親述小米熱血十年》裡，最該被讀進去的不是後面的飢餓行銷，是小米做手機前先發一套 MIUI 給一百個發燒友、每週照著抱怨改的那一步。用痛點的眼光重讀小米十年：把會嫌你的真實使用者，請進你做產品的房間，就是最扎實的需求驗證。',
  'path'  => '/lens/xiaomi-the-first-ten-years',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一往無前：雷軍親述小米熱血十年》',
  'heading'   => '把會嫌你的人，請進你做產品的房間',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/xiaomi-the-first-ten-years.html',
  'book'      => ['name' => '一往無前：雷軍親述小米熱血十年', 'author' => '范海濤'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，已經有幾個真人在為它付代價？',
    'body'    => '小米做手機前，先找了一百個願意陪它折騰的人。《痛點》這把尺，幫你在動工前先把「到底是誰、為什麼會掏錢」問到具體。挑一個你正在猶豫的點子，五分鐘跑一遍，看清楚它底下有沒有人真的在痛。',
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
    ['name' => '一往無前',  'path' => '/lens/xiaomi-the-first-ten-years'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
