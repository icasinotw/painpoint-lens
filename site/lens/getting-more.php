<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那場談判，對面那張椅子可能根本沒人坐｜痛點 P.A.I.N.',
  'desc'  => '《華頓商學院最受歡迎的談判課》最強的一招，是逼你鑽進對方腦袋、別只顧自己的道理——這正是需求驗證。但戴蒙整本書默認對面坐著一個真人；做點子最致命的，卻是你連對面有沒有人坐都還沒確認，就對著空椅子練成交。',
  'path'  => '/lens/getting-more',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《華頓商學院最受歡迎的談判課》',
  'heading'   => '你那場談判，對面那張椅子可能根本沒人坐',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/getting-more.html',
  'book'      => ['name' => '華頓商學院最受歡迎的談判課', 'author' => 'Stuart Diamond 史都華・戴蒙'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那場談判，對面到底有沒有人坐？',
    'body'    => '戴蒙教你鑽進對方腦袋、把對方讀懂；《痛點》這把尺，先幫你確認對面那張椅子上真的有人。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '華頓商學院最受歡迎的談判課', 'path' => '/lens/getting-more'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
