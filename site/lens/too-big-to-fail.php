<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你正在用雷曼倒閉前那套估值法，替自己的點子記帳：用痛點之尺重讀《大到不能倒》｜痛點 P.A.I.N.',
  'desc'  => '《大到不能倒》拆的是雷曼怎麼把自己等垮——太久不肯按市價替資產記帳，只信自己模型算出來的那個安心價。用痛點之尺看：你也正用同一套估值法替自己的點子記帳。換成市場的真價，只需要一個肯掏錢的真人。',
  'path'  => '/lens/too-big-to-fail',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大到不能倒》',
  'heading'   => '你正在用雷曼倒閉前那套估值法，替自己的點子記帳',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/too-big-to-fail.html',
  'book'      => ['name' => '大到不能倒：金融海嘯內幕真相始末', 'author' => 'Andrew Ross Sorkin（安德魯・羅斯・索爾金）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的點子，現在值多少？換市場記一次帳。',
    'body'    => '《大到不能倒》裡，雷曼到死都在用自己想要的價記帳；你也可以選擇繼續用腦中的模型估你的點子。或者，現在就免費體檢一次，五分鐘看出你最弱、最該先補的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '大到不能倒', 'path' => '/lens/too-big-to-fail'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
