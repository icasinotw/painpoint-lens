<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '福萊德要你別再瞎猜、動手就對了，你卻把唯一不必猜的那筆也一起丟了：用痛點之尺重讀《工作大解放》｜痛點 P.A.I.N.',
  'desc'  => '《工作大解放》的福萊德和漢森說「計畫就是瞎猜」，要你把商業計畫、五年預測全丟掉，動手就對了。用痛點之尺重讀：你照單全丟，卻連那句走出門當天就驗得到的「一定有人要」也一起鎖進了抽屜——它是你整疊賭注裡，唯一一筆能當場兌現成事實的。',
  'path'  => '/lens/rework',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《工作大解放》',
  'heading'   => '唯一不必猜的那一筆，你也一起鎖進了抽屜',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/rework.html',
  'book'      => ['name' => '工作大解放（Rework）', 'author' => 'Jason Fried 賈森・福萊德、David Heinemeier Hansson 大衛・漢森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別計畫、動手做——可你那個點子最該「出貨」的一步，拖了多久沒做？',
    'body'    => '福萊德要的出貨，是讓東西第一次被陌生人用錢碰一下。趁它還只是個半成品，連同一個你真會開口收的價格，端到一個沒理由給你面子的人面前，看他今天掏不掏錢——別再讓那一疊「等做完再說」，替你把這一步又往後挪一年。',
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
    ['name' => '工作大解放',  'path' => '/lens/rework'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
