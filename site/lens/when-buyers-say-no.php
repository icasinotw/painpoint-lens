<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《當客戶說不》｜痛點 P.A.I.N.',
  'desc'  => '湯姆・霍普金斯教你把客戶的「不」當成轉彎，用一套說服循環繞回去再談。用痛點之尺重讀：他把「不」之後怎麼接寫到了同類書頂尖，卻整本繞開了更前面那一格——這個說「不」的人，到底痛不痛、痛到願意掏錢了嗎。先分清楚線那頭是魚還是石頭，才知道值不值得收。',
  'path'  => '/lens/when-buyers-say-no',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《當客戶說不》',
  'heading'   => '客戶說「不」，先分清楚那是魚還是石頭',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/when-buyers-say-no.html',
  'book'      => ['name' => '當客戶說不', 'author' => 'Tom Hopkins 湯姆・霍普金斯、Ben Katt 班・卡特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '對付「不」之前，先確認有沒有人要',
    'body'    => '霍普金斯教你把客戶的「不」繞回來再談；要不要先花五分鐘，確認這個人本來就該買——他到底痛不痛、痛到願意掏錢了嗎？',
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
    ['name' => '當客戶說不', 'path' => '/lens/when-buyers-say-no'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
