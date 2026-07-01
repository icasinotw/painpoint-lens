<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '魯德手上，有幾百萬個沒人看時的你：用痛點之尺重讀《我們是誰？》｜痛點 P.A.I.N.',
  'desc'  => '《我們是誰？》用 OkCupid 幾百萬筆真實行為，證明人「說的」和「做的」差得像兩個人。用痛點的眼光看：這正是需求驗證最硬的一課——別信他嘴上說要，去看他已經為這個痛花過什麼。',
  'path'  => '/lens/dataclysm',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《我們是誰？》',
  'heading'   => '魯德手上，有幾百萬個沒人看時的你',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/dataclysm.html',
  'book'      => ['name' => '我們是誰？大數據下的人類行為觀察學', 'author' => 'Christian Rudder（克里斯汀・魯德）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '他嘴上說會買，這代表有人要嗎？',
    'body'    => '《我們是誰？》用幾百萬筆行為證明，人說的和做的可以差得像兩個人；痛點之尺把這件事收成一條你能天天自問的紀律：別記他的承諾，去查他已經花掉的錢和時間。',
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
    ['name' => '我們是誰？', 'path' => '/lens/dataclysm'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
