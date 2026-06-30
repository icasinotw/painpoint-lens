<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最該防的，是正在替自己找理由的你：用痛點之尺重讀《底層邏輯》｜痛點 P.A.I.N.',
  'desc'  => '劉潤《底層邏輯》把「事實與觀點」「機率思維」這些天天在用卻沒拆開看的動作，拆成乾淨的零件。用痛點的眼光重讀：你缺的不是道理，是腦子一熱那一刻還拿得出來的那把刀——把自己講順的話拆成事實和觀點、把「我覺得會成」逼成一個算得出來的數字。',
  'path'  => '/lens/underlying-logic',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《底層邏輯》',
  'heading'   => '你最該防的，是正在替自己找理由的你',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/underlying-logic.html',
  'book'      => ['name' => '底層邏輯：看清這個世界的底牌', 'author' => '劉潤'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先把你講最順的那句話拆開看一眼',
    'body'    => '《底層邏輯》教你分辨事實和觀點；痛點這把尺，只逼你把那句你講得最理直氣壯的話，拆成「哪句能驗、哪句是你」。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
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
    ['name' => '底層邏輯',    'path' => '/lens/underlying-logic'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
