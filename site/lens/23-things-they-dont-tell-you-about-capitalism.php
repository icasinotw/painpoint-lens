<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那句「一定有人要」，是一句沒被你押進事實的想當然：用痛點之尺重讀《資本主義沒告訴你的23件事》｜痛點 P.A.I.N.',
  'desc'  => '張夏準《資本主義沒告訴你的23件事》整本書只練一個動作：不准一句話因為「聽起來理所當然」就過關。用痛點之尺重讀——你心裡那句「一定有人要」，正是這種沒被押進事實的想當然；替你的點子寫下第二十四件事，把它從答案席拖回去驗。',
  'path'  => '/lens/23-things-they-dont-tell-you-about-capitalism',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《資本主義沒告訴你的23件事》',
  'heading'   => '張夏準把二十三句「想當然」一句一句押進事實裡，你心裡那句「一定有人要」，還沒被押過一次',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/23-things-they-dont-tell-you-about-capitalism.html',
  'book'      => ['name' => '資本主義沒告訴你的23件事(23 Things They Don\'t Tell You About Capitalism)', 'author' => 'Ha-Joon Chang 張夏準'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，最篤定的那句「一定有人要」，敢不敢替它寫下「第二十四件事」？',
    'body'    => '張夏準逐句把「想當然」押進事實；你那個點子也一樣，先讓一個陌生人在真要掏錢的時刻，把「一定有人要」驗成一筆真的紀錄。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                        'path' => '/'],
    ['name' => '痛點之尺',                     'path' => '/lens'],
    ['name' => '資本主義沒告訴你的23件事',       'path' => '/lens/23-things-they-dont-tell-you-about-capitalism'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
