<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '有政府撐腰的那台，掉進了河裡：用痛點之尺拆《飛翔之夢》｜痛點 P.A.I.N.',
  'desc'  => '蘭利有政府五萬美元、有史密森尼、有滿場記者，飛行器卻插進波多馬克河；九天後，兩個開單車行、沒學位沒補助的兄弟飛了起來。用痛點的眼光重讀麥卡勒這本萊特兄弟傳：贏的不是資源，是問對了那個沒人想碰的問題——別把力氣花在你最順手、卻不是真正卡住的那一關，也別照抄一份你從沒親手量過的權威數字。',
  'path'  => '/lens/wright-brothers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《飛翔之夢》',
  'heading'   => '有政府撐腰的那台，掉進了河裡',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/wright-brothers.html',
  'book'      => ['name' => '飛翔之夢：萊特兄弟新傳（The Wright Brothers）', 'author' => 'David McCullough 大衛・麥卡勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在拚的那個馬力，是真正卡住的問題嗎',
    'body'    => '萊特兄弟贏在問對了那個沒人想碰的問題，而不是加大引擎。換到你自己的點子上，同一個道理：先確認你使力升級的那個東西，真的是卡住你的那一關。花五分鐘免費體檢一個點子，看出你最沒把握、最該親手去量的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '飛翔之夢',   'path' => '/lens/wright-brothers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
