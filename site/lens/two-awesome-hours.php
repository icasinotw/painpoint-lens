<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把最清醒的兩小時，付給了沒人下訂單的工作｜痛點 P.A.I.N.',
  'desc'  => '《每天最重要的2小時》的書名像效率口號，戴維斯真正在講的，是你一天只有兩三個鐘頭真正清醒，那是你最貴的資本。用痛點的眼光重讀：多數人在「抉擇點」那零點幾秒全自動接手，把最貴的腦力餵給最吵的雜事——那正是還沒替自己的注意力，做過一次需求驗證。',
  'path'  => '/lens/two-awesome-hours',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《每天最重要的2小時》',
  'heading'   => '你把最清醒的兩小時，付給了沒人下訂單的工作',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/two-awesome-hours.html',
  'book'      => ['name' => '每天最重要的2小時', 'author' => 'Josh Davis 喬許・戴維斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '停下來的那三秒，先給自己算一筆帳',
    'body'    => '戴維斯要你在抉擇點停三秒，問這件事配不配你今天最清醒的腦力；把同一個問句，轉向你手上那個還沒問過半個人的假設，往往更值得。',
    'primary' => ['url' => '/lens', 'label' => '再看一篇拆書'],
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
    ['name' => '每天最重要的2小時', 'path' => '/lens/two-awesome-hours'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
