<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你拿三五個人的客套，訓練出一個「大家都需要」的結論：用痛點之尺重讀《大演算》｜痛點 P.A.I.N.',
  'desc'  => '《大演算》把機器學習最致命的毛病叫「過度配適」：機器連訓練資料裡的雜訊都背成真理，考古題滿分、一上考場就垮。用痛點的眼光重讀：抱著點子的你，正拿三五個朋友的客套當訓練資料，學出一個「大家都需要」的幻覺，等真實市場這張新考卷一發，立刻現形。',
  'path'  => '/lens/the-master-algorithm',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大演算》',
  'heading'   => '你拿三五個人的客套，訓練出一個「大家都需要」的結論',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-master-algorithm.html',
  'book'      => ['name' => '大演算', 'author' => '佩德羅・多明戈斯（Pedro Domingos）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是用真資料訓練的，還是用人情？',
    'body'    => '《大演算》教你機器最怕「過度配適」——拿一批歪掉的資料，學出一個漂亮卻錯的結論；《痛點》這把尺，幫你換掉那批會對你好的人，去找幾個真的會掏錢的陌生人。現在就免費體檢一個點子，五分鐘照出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '大演算',  'path' => '/lens/the-master-algorithm'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
