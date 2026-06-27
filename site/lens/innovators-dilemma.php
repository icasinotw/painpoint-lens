<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '巨頭看不起的那群人，正是你的破口：用痛點之尺拆《創新的兩難》｜痛點 P.A.I.N.',
  'desc'  => '《創新的兩難》解釋好公司為什麼會被低階對手做掉。用 P.A.I.N. 之尺換角度重讀：巨頭懶得理、覺得「那也配」的那群人，是真的在痛——那正是小玩家該去敲門、去驗證的破口。',
  'path'  => '/lens/innovators-dilemma',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創新的兩難》',
  'heading'   => '巨頭看不起的那群人，正是你的破口',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/innovators-dilemma.html',
  'book'      => ['name' => '創新的兩難（The Innovator\'s Dilemma）', 'author' => 'Clayton M. Christensen 克雷頓・克里斯汀生'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你看中的那群人，是真的在痛，還是你以為的？',
    'body'    => '《創新的兩難》讓你看見巨頭的盲點；《痛點》這把尺，幫你驗證你看中的那群人到底痛不痛、值不值得做。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '創新的兩難',  'path' => '/lens/innovators-dilemma'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
