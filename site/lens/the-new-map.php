<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '誰離不開誰，才是真正的地圖：用痛點之尺重讀《全球新版圖》｜痛點 P.A.I.N.',
  'desc'  => '丹尼爾・尤金《全球新版圖》把世界地圖翻過來，改畫能源的流向與依賴。用痛點的眼光重讀：他讀權力的方法，就是找出誰離不開誰——這跟找出客戶非解不可的痛，其實是同一把尺。',
  'path'  => '/lens/the-new-map',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《全球新版圖》',
  'heading'   => '誰離不開誰，才是真正的地圖',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-new-map.html',
  'book'      => ['name' => '全球新版圖：能源、氣候，以及國家間的競逐', 'author' => 'Daniel Yergin 丹尼爾・尤金'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那段關係，開關到底握在誰手裡？',
    'body'    => '尤金靠一張「誰離不開誰」的地圖讀懂大國博弈；同一套眼光，也能拿去重看你正在依賴、或正被依賴的那段關係，看清真正的籌碼落在哪一邊。',
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
    ['name' => '全球新版圖',  'path' => '/lens/the-new-map'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
