<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《人性鍊金術》｜痛點 P.A.I.N.',
  'desc'  => '奧美副董薩特蘭在《人性鍊金術》裡追的，是試算表抓不到、卻真正讓人掏錢的心理價值——飯店把門房換成自動門，省下的薪水算得清，賠掉的體面沒人算。用痛點之尺重讀：你也對自己的點子做了同一件事，把「有沒有人要」縮成一份問卷、幾個讚，省下被陌生人打槍的難堪，也裁掉了唯一算數的那筆證據。',
  'path'  => '/lens/alchemy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《人性鍊金術》',
  'heading'   => '薩特蘭講的那個被裁掉的門房，你也在自己的點子上裁了一個一模一樣的',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/alchemy.html',
  'book'      => ['name' => '人性鍊金術：奧美廣告鬼才用行為科學顛覆理性世界', 'author' => 'Rory Sutherland 羅里・薩特蘭'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個「一定有人要」的點子，你替它裁掉了哪個門房？',
    'body'    => '《人性鍊金術》說最該算的價值，常常是試算表上算不到的那一筆；同一把尺對準你的點子，就是別再用一份問卷，頂替「有沒有人真的肯掏錢」這個會讓你難堪、卻唯一算數的測試。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '人性鍊金術',   'path' => '/lens/alchemy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
