<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '柳井正只認一種成果：有人真的要的：用痛點之尺重讀《經營者養成筆記》｜痛點 P.A.I.N.',
  'desc'  => '柳井正《經營者養成筆記》像一本只敲一根釘子的筆記：經營者，就是做出成果的人。用《痛點》的眼光重讀，會發現他其實在逼你對自己每天做的事做需求驗證——你最得意、最捨不得的那件事，門外到底有沒有一個真人在等？附一個今天就能拿三句話自審的動作。',
  'path'  => '/lens/notes-on-becoming-a-manager',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《經營者養成筆記》',
  'heading'   => '柳井正只認一種成果：有人真的要的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/notes-on-becoming-a-manager.html',
  'book'      => ['name' => '經營者養成筆記', 'author' => '柳井正'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那件最得意的事，真的有人在等嗎？',
    'body'    => '柳井正逼經營者只認一種成果——有人真的要的那種。先別急著把它做得更完美，回頭確認一件事：門外到底有沒有一個真人，正在等你這個東西。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '經營者養成筆記',         'path' => '/lens/notes-on-becoming-a-manager'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
