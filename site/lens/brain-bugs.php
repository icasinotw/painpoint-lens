<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把點子想過夠多遍，腦就會幫你當成真的：用痛點之尺重讀《大腦有問題？！》｜痛點 P.A.I.N.',
  'desc'  => '《大腦有問題？！》拆穿大腦的出廠瑕疵：它是一台聯想機器，會把「想過很多遍」誤當成「真的」、對數字幾乎無感、最容易被故事綁架。用痛點的眼光看，那份對自己點子的篤定，正是該被一個外部數字檢驗的 bug。',
  'path'  => '/lens/brain-bugs',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大腦有問題？！》',
  'heading'   => '你把點子想過夠多遍，腦就會幫你當成真的',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/brain-bugs.html',
  'book'      => ['name' => '大腦有問題？！：大腦瑕疵如何影響你我的生活', 'author' => '汀・布諾曼諾（Dean Buonomano）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最確定的那個點子，經得起一個外部數字嗎？',
    'body'    => '《大腦有問題？！》告訴你，大腦天生會把「想很多遍」當成「真的」；在你愛上自己的點子之前，先去找一個它讀不懂的數字來對一對。',
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
    ['name' => '大腦有問題？！',  'path' => '/lens/brain-bugs'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
