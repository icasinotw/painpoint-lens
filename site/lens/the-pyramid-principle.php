<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '塔尖那句沒人驗過：用痛點之尺重讀《金字塔原理》｜痛點 P.A.I.N.',
  'desc'  => '《金字塔原理》是顧問業的聖經：結論放上塔尖，底下每塊論點互不重疊、合起來把主張撐得滴水不漏。用痛點的眼光重讀：明托教的是「結論先行」——先定好結論再回頭找支撐，正是替「一定有人要」打造的確認偏誤引擎；它能撐住塔尖，卻沒教你驗塔尖那句話本身真不真。',
  'path'  => '/lens/the-pyramid-principle',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《金字塔原理》',
  'heading'   => '明托把整座金字塔都替你對齊了，塔尖那塊石頭，是你自己擺上去的',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-pyramid-principle.html',
  'book'      => ['name' => '金字塔原理：思考、寫作、解決問題的邏輯方法', 'author' => 'Barbara Minto 芭芭拉・明托'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，老覺得它邏輯很完整、一定有人要？',
    'body'    => '《金字塔原理》能把你的結論撐得無懈可擊，卻沒教你驗它本身真不真。先花五分鐘，把那句「一定有人要」單獨拎出來，看它底下到底有沒有一筆真實的成交撐著。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '金字塔原理',  'path' => '/lens/the-pyramid-principle'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
