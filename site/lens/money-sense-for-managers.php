<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他判斷公司死活，只用戶頭裡那一個數字：用痛點之尺重讀《主管該有的錢意識》｜痛點 P.A.I.N.',
  'desc'  => '小山昇要主管別細讀損益表、先看戶頭裡的現金。用痛點的眼光重讀《主管該有的錢意識》：驗點子看「有沒有人真的付錢」，管錢看「現金還在不在」，同一把尺，只認真金白銀。',
  'path'  => '/lens/money-sense-for-managers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《主管該有的錢意識》',
  'heading'   => '他判斷公司死活，只用戶頭裡那一個數字',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/money-sense-for-managers.html',
  'book'      => ['name' => '主管該有的錢意識', 'author' => '小山昇'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在替帳面數字開心之前，先看一眼真實的現金',
    'body'    => '小山昇要老闆只認戶頭裡的現金；痛點這把尺，要你只認真實掏出來的錢。兩件事其實是同一個動作——先確認那個數字是真的。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '主管該有的錢意識',     'path' => '/lens/money-sense-for-managers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
