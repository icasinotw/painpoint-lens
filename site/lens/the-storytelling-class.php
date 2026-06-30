<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的點子，是一個少了阻礙的故事｜痛點 P.A.I.N.',
  'desc'  => '許榮哲《故事課》用「靶心人公式」七問教你說故事，分量最重的是第二格：阻礙。用痛點之尺重讀：一個沒有阻礙的故事沒人要聽，一個說不出客戶卡在哪的點子也沒人要買——這禮拜，替你的點子補填第二格。',
  'path'  => '/lens/the-storytelling-class',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《故事課》',
  'heading'   => '你的點子，是一個少了阻礙的故事',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-storytelling-class.html',
  'book'      => ['name' => '故事課1：說故事的人最有影響力', 'author' => '許榮哲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '一個說得很順的點子，你驗過它那道「阻礙」是真的嗎？',
    'body'    => '許榮哲教你把故事的第二格寫到揪心；痛點這把尺，幫你確認那道阻礙不是自己編的佈景。花五分鐘，把你那個點子最該被戳的那一格，誠實跑一遍。',
    'primary' => ['url' => '/tool', 'label' => '免費替我的點子驗一次痛'],
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
    ['name' => '故事課',     'path' => '/lens/the-storytelling-class'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
