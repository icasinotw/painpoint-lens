<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你大腦裡那個操盤手，還是個原始人：用痛點之尺拆《投資進化論》｜痛點 P.A.I.N.',
  'desc'  => '茲威格把投資人的頭塞進腦造影機才發現：替你按下買賣鍵的，是一顆還停在草原上、看到兩次就信第三次的大腦。用痛點的眼光重讀《投資進化論》——你急著押下去的那個「機會」，常只是大腦用一坨雜訊現編、再塞進你手裡的漂亮劇本，下注前先逼自己查一查它是不是真的。',
  'path'  => '/lens/your-money-and-your-brain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《投資進化論》',
  'heading'   => '你大腦裡那個操盤手，還是個原始人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/your-money-and-your-brain.html',
  'book'      => ['name' => '投資進化論（Your Money and Your Brain）', 'author' => 'Jason Zweig 傑森・茲威格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '認得腦裡那個原始人之後，下一個讓你心動的點子先別急著押',
    'body'    => '茲威格幫你看見大腦怎麼把雜訊編成劇本；輪到你自己那個躍躍欲試的點子時，先攤開來照一照——它到底有沒有真東西撐著，還是只是又一個編得太順的故事。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '投資進化論',   'path' => '/lens/your-money-and-your-brain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
