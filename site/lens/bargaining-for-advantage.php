<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最後拿到多少，卡在你敢期待多少：用痛點之尺重讀《華頓商學院的高效談判學》｜痛點 P.A.I.N.',
  'desc'  => '謝爾這本華頓談判經典發現，你最後談成多少，大致停在你上桌前真心期待的高度。用痛點的眼光重讀《華頓商學院的高效談判學》：把「多拿一點就好」的願望，逼成一個攤得開、講得出理由的數字——別讓那條期待線，等對方來幫你定。',
  'path'  => '/lens/bargaining-for-advantage',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《華頓商學院的高效談判學》',
  'heading'   => '你最後拿到多少，卡在你敢期待多少',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/bargaining-for-advantage.html',
  'book'      => ['name' => '華頓商學院的高效談判學', 'author' => 'G. Richard Shell（理查・謝爾）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '下次開口前，你那個數字寫得出理由嗎？',
    'body'    => '別讓「多拿一點就好」替你封頂。開口前先寫三行——你希望拿多少、憑什麼、收成一句敢直視對方講出口的話，那才是你真正的期待。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '華頓商學院的高效談判學',    'path' => '/lens/bargaining-for-advantage'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
