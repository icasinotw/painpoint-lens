<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你信的那些「證據」，多半是球探的直覺：用痛點之尺拆《魔球》｜痛點 P.A.I.N.',
  'desc'  => '《魔球》表面寫棒球，骨子裡問的是：你下注時，信的是「感覺會成」的直覺，還是真能預測結果的數字？球探看走眼，跟你朋友都說「這點子讚」，是同一種錯覺。用痛點的眼光重讀，把你拿來驗點子的那些好聽證據，換成一個會預測「有人付錢」的數字。',
  'path'  => '/lens/moneyball',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《魔球》',
  'heading'   => '你信的那些「證據」，多半是球探的直覺',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/moneyball.html',
  'book'      => ['name' => '魔球（Moneyball）', 'author' => 'Michael Lewis 麥可・路易士'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '球探看走眼之後，你的下一個點子先別急著下注',
    'body'    => '《魔球》讓你看見「感覺對」有多會騙人；《痛點》這把尺，幫你把下一個讓你心動的點子，先換成一個能預測「有人付錢」的數字。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '魔球',        'path' => '/lens/moneyball'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
