<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => 'Google 想盡辦法不讓最高薪的人說了算，你的公司只聽你一個：用痛點之尺重讀《Google 模式》｜痛點 P.A.I.N.',
  'desc'  => '《Google 模式》裡，施密特要大家別讓 HiPPO（薪水最高的人的意見）靠氣勢拍板，把決定權交給數據。用痛點的眼光重讀：你那家新創的 HiPPO 就是你，而能蓋過你「我覺得」的數據只有一筆——一個真人真的為它掏了錢。',
  'path'  => '/lens/how-google-works',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《Google 模式》',
  'heading'   => 'Google 想盡辦法不讓最高薪的人說了算，你的公司只聽你一個',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/how-google-works.html',
  'book'      => ['name' => 'Google 模式（How Google Works）', 'author' => 'Eric Schmidt 艾力克・施密特、Jonathan Rosenberg 強納森・羅森柏格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '這場會吵得最大聲的，是不是還只有你一個？',
    'body'    => '《Google 模式》教你別讓最高薪的人靠氣勢拍板；《痛點》這把尺，幫你找到那筆能蓋過自己「我覺得」的數據。現在就免費體檢一個點子，五分鐘看「有沒有人要」那一格站不站得住；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => 'Google 模式',  'path' => '/lens/how-google-works'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
