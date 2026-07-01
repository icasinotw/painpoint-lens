<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你公司的每條規定，都是一個沒人驗過的產品：用痛點之尺重讀《組織再進化》｜痛點 P.A.I.N.',
  'desc'  => '《組織再進化》要你動的，是公司底下那套看不見的「作業系統」。用痛點的眼光重讀：公司內部每一條流程、規定、例會，其實都是一件沒人驗過需求就上線的產品——迪格南教的，正是替公司做需求驗證。',
  'path'  => '/lens/brave-new-work',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《組織再進化》',
  'heading'   => '你公司的每條規定，都是一個沒人驗過的產品',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/brave-new-work.html',
  'book'      => ['name' => '組織再進化', 'author' => 'Aaron Dignan 亞倫・迪格南'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那條規定，還有沒有人要？',
    'body'    => '《組織再進化》教你把公司當一套作業系統重寫；痛點這把尺，教你在動手之前先確認到底有沒有人要。同一個動作，也能拿來驗你自己的下一個點子。',
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
    ['name' => '組織再進化',  'path' => '/lens/brave-new-work'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
