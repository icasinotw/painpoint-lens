<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '點子的死因，往往在你動手前就寫好了：用痛點之尺重讀《轉危為安》｜痛點 P.A.I.N.',
  'desc'  => '戴明《轉危為安》最狠的一句：九成以上的問題出在系統，不在人。他用一箱紅白珠子證明，罵舀到紅珠的工人，永遠修不好那個箱子。用痛點的眼光重讀十四要點：你那個點子的瑕疵，常在你動手前就做進去了——先伸手進箱子，確認外面真的有人要，再開工。',
  'path'  => '/lens/out-of-the-crisis',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《轉危為安》',
  'heading'   => '點子的死因，往往在你動手前就寫好了',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/out-of-the-crisis.html',
  'book'      => ['name' => '轉危為安（Out of the Crisis）', 'author' => 'W. Edwards Deming 愛德華・戴明'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '罵人之前，先看一眼那個箱子',
    'body'    => '戴明要你別再對著舀到紅珠的工人發火，回頭去修那個箱子。你手上那個點子也一樣——它失敗時，先別怪自己不夠拚，回頭確認那個最上游的假設：外面到底有沒有人，真的在為這件事痛。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '轉危為安',    'path' => '/lens/out-of-the-crisis'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
