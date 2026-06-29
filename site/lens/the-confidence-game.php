<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最難防的騙子，是你說給自己聽的故事：用痛點之尺重讀《騙局》｜痛點 P.A.I.N.',
  'desc'  => '《騙局》拆穿騙子怎麼一步步讓人上鉤，柯妮可娃的結論卻指向你自己：騙局能得手，是因為被騙的人心裡早就想信那套故事。用痛點的眼光重讀——最會挑你弱點、最會說故事的騙子，常常就是正在替自己的點子做簡報、捨不得潑自己冷水的你。',
  'path'  => '/lens/the-confidence-game',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《騙局》',
  'heading'   => '最難防的騙子，是你說給自己聽的故事',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-confidence-game.html',
  'book'      => ['name' => '騙局：為什麼聰明人容易上當？', 'author' => '瑪莉亞・柯妮可娃（Maria Konnikova）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，你最怕別人質疑它？',
    'body'    => '那份「不想被質疑」的心情，本身就是警訊。趁還沒徹底愛上它之前，先找一個會對你說真話的人，把它攤出來問一遍。',
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
    ['name' => '騙局',     'path' => '/lens/the-confidence-game'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
