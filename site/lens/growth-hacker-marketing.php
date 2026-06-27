<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那台成長引擎，可能正全速開向一面牆｜痛點 P.A.I.N.',
  'desc'  => '《成長駭客行銷》把成長拆成四段，第一段就老實說：最大的成長駭客，是先做出有人要的東西。用痛點之尺重讀霍利得——他遞給你一支能催到底的油門，卻沒附上確認車頭朝哪的儀表；你那點子真正該先驗的，是還沒衝流量之前，外面到底有沒有人肯掏錢。',
  'path'  => '/lens/growth-hacker-marketing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《成長駭客行銷》',
  'heading'   => '你那台成長引擎，可能正全速開向一面牆',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/growth-hacker-marketing.html',
  'book'      => ['name' => '成長駭客行銷', 'author' => 'Ryan Holiday 萊恩・霍利得'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那台引擎，正載著一個有人要的點子嗎？',
    'body'    => '霍利得教你把成長催到極限；《痛點》這把尺，先幫你確認被它乘的那個底數——外面到底有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '成長駭客行銷', 'path' => '/lens/growth-hacker-marketing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
