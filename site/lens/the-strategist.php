<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的公司消失了，有誰會真的在意：用痛點之尺重讀《大策略家》｜痛點 P.A.I.N.',
  'desc'  => '蒙哥馬利《大策略家》把策略從一道分析題，還原成領導者每天得親自扛、永遠寫不完的活——她對成功老闆問的「少了你，世界會不會有人在意」，就是最難的那道策略題。用痛點之尺重讀：賺錢最會幫你把「有沒有人真的需要你」這題藏起來，而這把尺得你一直拿在手上、隔一段時間回頭重量。',
  'path'  => '/lens/the-strategist',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大策略家》',
  'heading'   => '你的公司消失了，有誰會真的在意',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-strategist.html',
  'book'      => ['name' => '大策略家', 'author' => 'Cynthia A. Montgomery 辛西亞·蒙哥馬利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最賺的那門生意，還有人非你不可嗎？',
    'body'    => '把它當一個全新的點子，重新問當年讓它成立的那幾題：那個痛還在嗎、客人還願意付那個價嗎、你那套東西別人現在湊不湊得齊？五分鐘，照出最弱的一格。',
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
    ['name' => '大策略家',  'path' => '/lens/the-strategist'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
