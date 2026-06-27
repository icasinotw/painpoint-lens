<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '米勒給好問題立了三條規矩，你那個點子最該問的，剛好一條都不合｜痛點 P.A.I.N.',
  'desc'  => '《QBQ！問題背後的問題》教你把問句改成「我能做什麼」。可你問那個還沒人付錢的點子的每一句，都符合米勒的好問題規矩、卻全在瞎忙——真正該問、你卻一直繞開的那一句，是有沒有真人為它掏過錢。用痛點之尺重講 QBQ。',
  'path'  => '/lens/qbq',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《QBQ！問題背後的問題》',
  'heading'   => '米勒給好問題立了三條規矩，你那個點子最該問的，剛好一條都不合',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/qbq.html',
  'book'      => ['name' => 'QBQ！問題背後的問題', 'author' => 'John G. Miller 約翰・米勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那個點子，到底有沒有人要？',
    'body'    => 'QBQ 教你把問句改成「我能做什麼」；《痛點》這把尺，逼你先問那句一直被你繞開的——有沒有真人為它付過錢。現在就免費體檢一個點子，五分鐘看出最空的那一格；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => 'QBQ',      'path' => '/lens/qbq'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
