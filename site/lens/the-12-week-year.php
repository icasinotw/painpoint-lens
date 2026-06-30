<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《12週做完一年工作》｜痛點 P.A.I.N.',
  'desc'  => '《12週做完一年工作》逼你每週替「自己做了哪些事」打分數，是一具關掉拖延的好引擎。用痛點的眼光重讀：執行率打到九成，成果卻不動，多半是你把「努力」和「換到東西」記成同一本帳——這篇教你替努力配一個對帳日。',
  'path'  => '/lens/the-12-week-year',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《12週做完一年工作》',
  'heading'   => '努力一本帳，成果一本帳——你只記了前面那本',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-12-week-year.html',
  'book'      => ['name' => '12週做完一年工作（The 12 Week Year）', 'author' => 'Brian P. Moran 布萊恩・莫蘭、Michael Lennington 麥可・列寧頓'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你這禮拜流的汗，有沒有換成東西',
    'body'    => '把目標拆成左右兩欄：左邊是你今天就能算的動作數字，右邊是這些動作「應該」推動的那一個成果數字，再配一個三週後的對帳日。三週後左邊很滿、右邊沒動，要換的是動作，不是再加碼。',
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
    ['name' => '12週做完一年工作', 'path' => '/lens/the-12-week-year'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
