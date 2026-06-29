<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '骨牌推得越順，你越快撞倒一個沒人要的終點：用痛點之尺重讀《成功，從聚焦一件事開始》｜痛點 P.A.I.N.',
  'desc'  => '凱勒用一排骨牌示範以小搏大，再給你一個「聚焦問題」，從這輩子想達成的事一路往回推，找出今天該推的第一張骨牌。用痛點的眼光重讀：這套問句只幫你算「怎麼最省力到終點」，卻從不問你「終點該不該去」——骨牌排得再順，撞向一個沒人要的終點，只會把你更快、更省力地，送到那面空牆前。',
  'path'  => '/lens/the-one-thing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《成功，從聚焦一件事開始》',
  'heading'   => '骨牌推得越順，你越快撞倒一個沒人要的終點',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-one-thing.html',
  'book'      => ['name' => '成功，從聚焦一件事開始', 'author' => 'Gary Keller（蓋瑞・凱勒）、Jay Papasan（傑伊・巴帕森）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正準備撞倒的那個終點，有人在等嗎？',
    'body'    => '在你照凱勒的聚焦問題往下推骨牌之前，先確認最後那張骨牌的後面，真的有人站著。分清楚了，再決定要不要開始排。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '成功，從聚焦一件事開始',    'path' => '/lens/the-one-thing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
