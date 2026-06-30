<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '每個快倒的事業，都養著一套讓人睡得著的說法：用痛點之尺重讀《V型復甦的經營》｜痛點 P.A.I.N.',
  'desc'  => '三枝匡《V型復甦的經營》用一個改革者空降救爛攤子的故事，把一個事業怎麼一天一天爛掉慢動作放給你看。用痛點的眼光重讀：救一個老事業，跟驗一個新點子是同一道題——還有沒有人，真的為這件事在痛；先把你嘴上那句「還好」，換成一個算得出來的數字。',
  'path'  => '/lens/v-shaped-recovery',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《V型復甦的經營》',
  'heading'   => '每個快倒的事業，都養著一套讓人睡得著的說法',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/v-shaped-recovery.html',
  'book'      => ['name' => 'V型復甦的經營：一個經營改革者的告白', 'author' => '三枝匡'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先挑一件你嘴上「還好」的事，算給自己看',
    'body'    => '《V型復甦的經營》逼一個爛事業把虧損攤上桌；痛點這把尺，只逼你把那句「還好啦」，換成一個你用手指頭就能算的數字。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => 'V型復甦的經營',  'path' => '/lens/v-shaped-recovery'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
