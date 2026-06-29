<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你以為的護城河，多半三年內被填平：用痛點之尺重讀《護城河投資優勢》｜痛點 P.A.I.N.',
  'desc'  => '《護城河投資優勢》把巴菲特口中的「護城河」拆成四種真結構、四種假優勢。多爾西寫給投資人，但那張假護城河清單是創業者的照妖鏡——你最得意的好產品、高市佔、好團隊，多半一條溝都不是。',
  'path'  => '/lens/the-little-book-that-builds-wealth',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《護城河投資優勢》',
  'heading'   => '你以為的護城河，多半三年內被填平',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-little-book-that-builds-wealth.html',
  'book'      => ['name' => '護城河投資優勢：巴菲特獲利的唯一法則', 'author' => 'Pat Dorsey 派特・多爾西'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title' => '你的生意，有沒有一道別人填不平的溝？',
    'body'  => '《護城河投資優勢》教你從外面認出別人公司的護城河；把那張清單倒過來，照一照你自己手上正在做的事——你最得意的優勢，是真的溝，還是一段好天氣？',
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
    ['name' => '護城河投資優勢', 'path' => '/lens/the-little-book-that-builds-wealth'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
