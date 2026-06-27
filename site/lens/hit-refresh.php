<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子，就是你的 Windows：用痛點之尺重讀《刷新未來》｜痛點 P.A.I.N.',
  'desc'  => '微軟太確定自己懂，差點賠掉一整家公司；《刷新未來》的解藥是從 know-it-all 變成 learn-it-all。用痛點的眼光重讀：你最篤定的那個點子就是你的 Windows，先走出門驗證有沒有人要，再動手做。',
  'path'  => '/lens/hit-refresh',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《刷新未來》',
  'heading'   => '微軟什麼都懂，就是沒發現大家已經不要了',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/hit-refresh.html',
  'book'      => ['name' => '刷新未來：重新想像 AI + HI 智能革命下的商業與變革', 'author' => 'Satya Nadella 薩帝亞・納德拉'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最篤定的那個點子，驗過有沒有人要了嗎？',
    'body'    => '納德拉花了好幾年、賠掉一整支手機，才把「我們最懂」那行字劃掉重抓。《痛點》這把尺，幫你在燒掉積蓄和時間之前，先確認你那個 Windows 真的有人要。現在就免費體檢一個決定，五分鐘看出最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '刷新未來',  'path' => '/lens/hit-refresh'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
