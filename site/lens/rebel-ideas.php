<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一屋子聰明人，會一起漏看同一個盲點：用痛點之尺重讀《叛逆者團隊》｜痛點 P.A.I.N.',
  'desc'  => '席德的《叛逆者團隊》用 CIA 漏看賓拉登、八百人猜中一頭牛的重量證明：一群想得一樣的聰明人，會自信地一起做出錯判斷。用痛點的眼光重讀——你覺得「一定有人要」，常常只是身邊的人都跟你想得一樣；要驗證痛，得找跟你不一樣的真人去問。',
  'path'  => '/lens/rebel-ideas',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《叛逆者團隊》',
  'heading'   => '一屋子聰明人，會一起漏看同一個盲點',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/rebel-ideas.html',
  'book'      => ['name' => '叛逆者團隊', 'author' => '馬修・席德（Matthew Syed）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '替你最篤定的那個判斷，找一個唱反調的人',
    'body'    => '《叛逆者團隊》證明同質的房間會集體看走眼；痛點這把尺，只逼你把一句含混的「一定有人要」，攤給一個跟你不一樣的真人聽，再算一次。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '叛逆者團隊',  'path' => '/lens/rebel-ideas'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
