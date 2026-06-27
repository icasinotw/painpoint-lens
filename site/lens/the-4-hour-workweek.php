<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他要你先去測有沒有人買，你卻只記得那座海灘：用痛點之尺重讀《一週工作4小時》｜痛點 P.A.I.N.',
  'desc'  => '《一週工作4小時》賣的是一個畫面：你在海灘上，生意自動替你轉，一週只碰四小時。但很少人記得，費里斯其實把「先去測有沒有人買」寫進了書——進貨前先花小錢買廣告，看有沒有人真的點購買。用痛點之尺重讀：這是名著裡少見的需求驗證一章，偏偏也最多人跳過；而真正的訊號比一次點擊更早、更便宜——一個你叫得出名字、已經在為這個痛掏錢的真人。',
  'path'  => '/lens/the-4-hour-workweek',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《一週工作4小時》',
  'heading'   => '他要你先去測有沒有人買，你卻只記得那座海灘',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-4-hour-workweek.html',
  'book'      => ['name' => '一週工作4小時：擺脫朝九晚五的窮忙生活，晉身「新富族」!', 'author' => 'Tim Ferriss 提摩西・費里斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你忙著自動化之前，先補做那個被你跳過的測試',
    'body'    => '《一週工作4小時》教你把生意自動到沒有你也能轉；《痛點》這把尺，幫你先確認那門生意外面到底有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '一週工作4小時',   'path' => '/lens/the-4-hour-workweek'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
