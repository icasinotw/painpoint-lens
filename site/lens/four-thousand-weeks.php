<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你等著把事情做完那天，永遠不會來：用痛點之尺重讀《人生4千個禮拜》｜痛點 P.A.I.N.',
  'desc'  => '柏克曼把一輩子換算成四千個禮拜，然後告訴你：那張待辦清單你永遠清不完，因為你越有效率，流進來的事越多。用痛點的眼光重讀：他對人生做的，正是痛點對生意做的——別被「等我搞定一切」這套漂亮劇本騙，把「人生苦短」換成一個你能心算、會痛的數字，逼自己誠實決定剩下的格子要花在哪。',
  'path'  => '/lens/four-thousand-weeks',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《人生4千個禮拜》',
  'heading'   => '你等著把事情做完那天，永遠不會來',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/four-thousand-weeks.html',
  'book'      => ['name' => '人生4千個禮拜', 'author' => 'Oliver Burkeman（奧利佛・柏克曼）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那件最該先做的事，排在第幾順位？',
    'body'    => '四千個禮拜不會等你把雜事清完。先想清楚那件你寧可讓別的事塌一角、也要先推進的事是什麼，把它排到明天的最前面。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '人生4千個禮拜',   'path' => '/lens/four-thousand-weeks'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
