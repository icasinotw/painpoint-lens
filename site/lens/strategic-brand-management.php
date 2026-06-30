<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '品牌是乘數，底下沒人要乘出來還是零：用痛點之尺重讀《策略品牌管理》｜痛點 P.A.I.N.',
  'desc'  => '凱勒《策略品牌管理》把「品牌資產」釘成一個算得出來的數字：顧客因為認得你而願意多付的那一塊。但品牌是個乘數，乘在「這產品本來有多少人要」上頭——底下基數是零，再強的品牌乘上去還是零。用 P.A.I.N. 補上凱勒預設你早就搞定、卻從不回頭驗的那一格：先確認有人要，再砸錢做品牌。',
  'path'  => '/lens/strategic-brand-management',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《策略品牌管理》',
  'heading'   => '品牌是乘數，底下沒人要乘出來還是零',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/strategic-brand-management.html',
  'book'      => ['name' => '策略品牌管理', 'author' => 'Kevin Lane Keller 凱文・連恩・凱勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在替品牌養乘數之前，先確認底下那個基數大於零',
    'body'    => '凱勒教你把品牌資產做大；在你押一個品牌上去之前，花五分鐘體檢這個點子，看看底下那個「有沒有人要」的基數，到底是正是零。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '策略品牌管理',    'path' => '/lens/strategic-brand-management'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
