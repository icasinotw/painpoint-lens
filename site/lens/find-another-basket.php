<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '多一個空籃子，救不了你的雞蛋：用痛點之尺拆《多找個籃子放雞蛋》｜痛點 P.A.I.N.',
  'desc'  => '王明聖《多找個籃子放雞蛋》要你別只靠一份薪水，主動多開幾個收入籃子。用痛點的眼光重讀：籃子的數量不是重點，裝不裝得到雞蛋才是——多開一個沒人要往裡放錢的副業，你分散掉的不是風險，是本來就不夠用的時間。先確認外頭有人要，再去多找一個籃子。',
  'path'  => '/lens/find-another-basket',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《多找個籃子放雞蛋》',
  'heading'   => '多一個空籃子，救不了你的雞蛋',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/find-another-basket.html',
  'book'      => ['name' => '多找個籃子放雞蛋', 'author' => '王明聖'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想清楚下一個籃子裝不裝得到雞蛋，再動手',
    'body'    => '王明聖幫你看見「只靠一份薪水」的脆弱；輪到你那個躍躍欲試的副業點子時，先攤開來照一照——它外頭到底有沒有真的人會掏錢，還是只是又一個編得太順的故事。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',             'path' => '/'],
    ['name' => '痛點之尺',          'path' => '/lens'],
    ['name' => '多找個籃子放雞蛋',    'path' => '/lens/find-another-basket'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
