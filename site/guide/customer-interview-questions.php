<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用戶訪談怎麼做?該問與千萬別問的問題清單｜痛點之尺',
  'desc'  => '用戶訪談最常見的死法,是問「你會用嗎」收到一堆客套。三個原則(問過去不問未來、問具體不問假設、讓他說你閉嘴)加一份可直接拿去用的訪談問題清單,還有千萬別問的三句,幫你聽出真痛、不被讚美騙。',
  'path'  => '/guide/customer-interview-questions',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · 用戶訪談',
  'heading'   => '用戶訪談怎麼做?該問的問題清單',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/customer-interview-questions.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '訪談收完,把聽到的痛拿來量一遍',
    'body'    => '把訪談裡聽到的真痛放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘看出這個痛夠不夠深、撐不撐得起一門生意。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/fieldkit', 'label' => '打開《出門找痛》工具箱'],
  ],
  'prev'      => ['url' => '/guide/validate-market-demand', 'label' => '怎麼知道有沒有人要(驗證市場需求)'],
  'next'      => ['url' => '/guide/what-to-validate-before-mvp', 'label' => '做 MVP 之前,要先驗證什麼?'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '用戶訪談問題清單', 'path' => '/guide/customer-interview-questions'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
