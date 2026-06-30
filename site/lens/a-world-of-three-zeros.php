<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他只做一種生意：痛到有人正在死的那種：用痛點之尺重讀《三零世界》｜痛點 P.A.I.N.',
  'desc'  => '尤努斯在《三零世界》推銷社會型企業，但真正讓它成立的，是他選痛的眼光——只對深到有具體的人正在受苦的痛下手。用痛點的眼光重讀：他保留了「先確認養得活自己」這道最硬的市場紀律，只拿掉利潤動機；今晚就能拿他那兩把尺——量痛、量錢——把你心裡那個「總有一天要做」的計畫量一遍。',
  'path'  => '/lens/a-world-of-three-zeros',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《三零世界》',
  'heading'   => '他只做一種生意：痛到有人正在死的那種',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/a-world-of-three-zeros.html',
  'book'      => ['name' => '三零世界：史上首次，我們有能力消除貧窮、失業與碳排放', 'author' => '穆罕默德・尤努斯（Muhammad Yunus）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你心裡那個「總有一天要做」的計畫，站不站得住？',
    'body'    => '挑一個你一直想做、覺得有意義的計畫，先別問自己夠不夠熱血，改用尤努斯那兩把尺量一量：有沒有一個具體的人，正在為這件事真的受苦？這件事除了靠你貼錢和募款，有沒有一條自己養活自己的路？兩個答案寫下來，你就知道它現在站不站得住。',
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
    ['name' => '三零世界',  'path' => '/lens/a-world-of-three-zeros'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
