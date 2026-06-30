<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '再好的想法，也得先去現場挨一頓打：用痛點之尺拆《本田宗一郎自傳》｜痛點 P.A.I.N.',
  'desc'  => '本田宗一郎一生逼著每個想法去現場挨打、從失敗裡撿答案，唯獨差點栽在自己最得意的氣冷引擎上。用痛點的眼光重讀：會害死你的，往往不是你沒想到的點子，是你太愛、捨不得拿去驗的那個。',
  'path'  => '/lens/soichiro-honda-autobiography',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《本田宗一郎自傳》',
  'heading'   => '再好的想法，也得先去現場挨一頓打',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/soichiro-honda-autobiography.html',
  'book'      => ['name' => '本田宗一郎自傳（夢を力に—私の履歴書）', 'author' => '本田宗一郎 Soichiro Honda'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂本田的失敗驗證法之後，輪到你最得意的那個想法',
    'body'    => '本田差點栽在一個自己捨不得拿去驗的想法上；輪到你最有把握、最不想被質疑的那個點子，別只在心裡確信——把它推出門，看看它在真實世界裡會不會裂。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '本田宗一郎自傳', 'path' => '/lens/soichiro-honda-autobiography'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
