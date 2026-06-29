<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你早把腦子，訓練成只挑好消息：用痛點之尺重讀《哈佛最受歡迎的快樂工作學》｜痛點 P.A.I.N.',
  'desc'  => '艾科爾用「俄羅斯方塊效應」證明大腦會被訓練成只看見它慣看的東西。用痛點的眼光重讀：你愛上一個點子後，那台掃描器早被調成只收「好消息」——今晚把你當證據的那幾條攤開，逐條問是有人做了什麼，還是只是說了什麼。',
  'path'  => '/lens/the-happiness-advantage',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《哈佛最受歡迎的快樂工作學》',
  'heading'   => '你早把腦子，訓練成只挑好消息',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-happiness-advantage.html',
  'book'      => ['name' => '哈佛最受歡迎的快樂工作學', 'author' => 'Shawn Achor 尚恩・艾科爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的掃描器，這幾週都在替你撈什麼？',
    'body'    => '艾科爾教你把大腦訓練成會看見好事；痛點這把尺，把同一台掃描器掉頭朝門外——不數有多少人說好，數有多少人已經用行動替這件事付過帳。',
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
    ['name' => '哈佛最受歡迎的快樂工作學', 'path' => '/lens/the-happiness-advantage'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
