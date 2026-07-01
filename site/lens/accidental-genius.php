<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最漂亮的那個想法，經不起十分鐘不停手：用痛點之尺重讀《自由書寫術》｜痛點 P.A.I.N.',
  'desc'  => '《自由書寫術》教你不停手地寫十分鐘，逼出腦裡被你修掉的真話。用痛點的眼光看：這等於把需求驗證掉頭對準你自己的腦子——你最有把握的那個點子，多半是先被你想漂亮、而不是想清楚的。',
  'path'  => '/lens/accidental-genius',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《自由書寫術》',
  'heading'   => '你最漂亮的那個想法，經不起十分鐘不停手',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/accidental-genius.html',
  'book'      => ['name' => '自由書寫術：身心倍速升級，讓筆下靈感泉湧的21個私房密技', 'author' => 'Mark Levy（馬克・李維）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最有把握的那個想法，站不站得住？',
    'body'    => '《自由書寫術》逼你把想法攤到紙上，看它拆掉包裝還剩什麼；痛點之尺把同一個動作，變成一條你能反覆自問的紀律：這個點子背後，真的有個痛在推它嗎？',
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
    ['name' => '自由書寫術', 'path' => '/lens/accidental-genius'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
