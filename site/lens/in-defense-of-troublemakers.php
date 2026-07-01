<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《異見的力量》｜痛點 P.A.I.N.',
  'desc'  => '查蘭・內梅斯證明：多數人的附和會讓你想得更窄，一個真心唱反調的人反而讓你想得更周全。用痛點的眼光重讀——你驗點子時收集到的那一排「好」，往往正是讓你看不見坑的東西；你缺的不是掌聲，是一個真的不看好它、還願意講理由的人。',
  'path'  => '/lens/in-defense-of-troublemakers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《異見的力量》',
  'heading'   => '你的點子缺一個真心唱衰它的人',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/in-defense-of-troublemakers.html',
  'book'      => ['name' => '異見的力量', 'author' => '查蘭・內梅斯 Charlan Nemeth'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的點子，敢拿去給最不看好它的人聽嗎？',
    'body'    => '內梅斯要你別再蒐集「好」——一排附和只證明大家懶得跟你吵；能替你看清點子有沒有解到痛的，是一個真心反對、還願意講理由的人。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '異見的力量',   'path' => '/lens/in-defense-of-troublemakers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
