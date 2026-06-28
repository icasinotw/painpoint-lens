<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「那絕對行不通」和「一定有人要」一樣不值錢：用痛點之尺重讀《一千零一個點子之後》｜痛點 P.A.I.N.',
  'desc'  => 'Netflix 第一任執行長馬克・藍道夫《一千零一個點子之後》最值錢的一課，是「沒有人能事先知道一件事行不行」。用痛點之尺重讀：你那句「一定有人要」，和當年大家對 Netflix 說的「那絕對行不通」一樣只是猜測；藍道夫分辨點子能不能活，靠的不是更篤定，是花一塊美金寄一張二手光碟出去，讓現實先開口。',
  'path'  => '/lens/that-will-never-work',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一千零一個點子之後》',
  'heading'   => '「一定有人要」，跟「那絕對行不通」一樣不值錢',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/that-will-never-work.html',
  'book'      => ['name' => '一千零一個點子之後：NETFLIX 創始的祕密（That Will Never Work: The Birth of Netflix and the Amazing Life of an Idea）', 'author' => 'Marc Randolph 馬克・藍道夫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，敢不敢花一塊美金先驗一次？',
    'body'    => '藍道夫面對「不知道行不行」，沒有想得更久，他用一張二手光碟、一張郵票，先讓現實開口。趁你還只押了一個念頭，找一個跟你非親非故的人，讓他看著你的東西和標價，當場決定掏不掏錢。',
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
    ['name' => '一千零一個點子之後',  'path' => '/lens/that-will-never-work'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
