<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '文案是擴音器，放大不出一個不存在的需求：用痛點之尺重讀《文案大師教你精準勸敗術》｜痛點 P.A.I.N.',
  'desc'  => '布萊的《文案大師教你精準勸敗術》把寫文案拆成可照做的步驟：4 U、先搔痛再止痛，教你把一句承諾說到讓人非買不可。用痛點的眼光重讀：文案是一支擴音器，你喊什麼它放大什麼——它放大得出一個需求，卻長不出一個原本不存在的需求。動筆寫之前，先確認這東西本來就有人要。',
  'path'  => '/lens/the-copywriters-handbook',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《文案大師教你精準勸敗術》',
  'heading'   => '文案是擴音器，放大不出一個不存在的需求',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-copywriters-handbook.html',
  'book'      => ['name' => '文案大師教你精準勸敗術', 'author' => 'Robert W. Bly（羅伯特・布萊）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在放大一個點子之前，先確認它撐得住',
    'body'    => '《文案大師教你精準勸敗術》教你把一句承諾說到讓人非買不可；痛點這把尺，幫你先確認那句承諾底下，真的有一群人在痛。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '文案大師教你精準勸敗術',     'path' => '/lens/the-copywriters-handbook'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
