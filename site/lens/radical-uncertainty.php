<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把算不出的未來，硬算成一個好看的數字：用痛點之尺重讀《極端不確定性》｜痛點 P.A.I.N.',
  'desc'  => '凱伊與金恩在《極端不確定性》裡分開兩種未知：算得出機率的「風險」，和再多資料也算不出的「極端不確定性」。用痛點的眼光重讀他們的謎題與懸案、賓拉登五五波與「這裡到底發生什麼事」：創業會不會成是一樁懸案，別再拿財務模型假裝算得準，先走出去確認現在有沒有人為這個痛掏錢。',
  'path'  => '/lens/radical-uncertainty',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《極端不確定性》',
  'heading'   => '把算不出的未來，硬算成一個好看的數字',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/radical-uncertainty.html',
  'book'      => ['name' => '極端不確定性：為不可知的未來做決策（Radical Uncertainty：Decision-making Beyond the Numbers）', 'author' => 'John Kay 約翰・凱、Mervyn King 莫文・金恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '算不出「會不會成」，那就先去確認「現在有沒有人在痛」',
    'body'    => '創業會不會成是一樁算不出的懸案；痛點這把尺，幫你把它翻成一個今天就能去確認的現況——現在有沒有人為這件事煩到願意掏錢。花五分鐘免費體檢一個點子，看出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '極端不確定性',  'path' => '/lens/radical-uncertainty'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
