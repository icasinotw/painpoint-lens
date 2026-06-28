<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最該做的事，六顆拖延地雷全中：用痛點之尺重讀《最有生產力的一年》｜痛點 P.A.I.N.',
  'desc'  => '貝利用一整年實驗煉出對付拖延的方法：一件事踩中越多顆地雷，你越會繞著走。用痛點的眼光重讀——你那個點子最該做的事「請一個陌生人付錢」，六顆地雷顆顆踩滿，於是你愈高效，就愈精準地繞開它。',
  'path'  => '/lens/the-productivity-project',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《最有生產力的一年》',
  'heading'   => '你最該做的事，六顆拖延地雷全中',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-productivity-project.html',
  'book'      => ['name' => '最有生產力的一年', 'author' => 'Chris Bailey 克里斯・貝利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正好有個點子，卻遲遲不敢拿去問人？',
    'body'    => '《最有生產力的一年》教你把時間、注意力、精力管到極致，卻沒問你把它們倒向了哪裡；先確認那一頭真的有人要，再決定要不要整缸倒過去。',
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
    ['name' => '最有生產力的一年',     'path' => '/lens/the-productivity-project'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
