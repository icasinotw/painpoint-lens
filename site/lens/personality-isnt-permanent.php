<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《訂做自己》｜痛點 P.A.I.N.',
  'desc'  => '班傑明・哈迪說，性格不是你天生的命，是你過去反覆做的事結成的慣性，你卻從沒拿它去驗過一次。用痛點的眼光重讀《訂做自己》：你對自己下的那句「我就是這種人」，跟創業者愛上一個沒人驗過的點子，是同一種病——別再往腦袋裡找答案，動手去收一個真實世界給的證據。',
  'path'  => '/lens/personality-isnt-permanent',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《訂做自己》',
  'heading'   => '『我就是這種人』，這句話你從沒驗過',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/personality-isnt-permanent.html',
  'book'      => ['name' => '訂做自己', 'author' => 'Benjamin Hardy 班傑明・哈迪'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你抱著的那個點子，有沒有送去驗過一次？',
    'body'    => '哈迪逼你看的，是你拿一個沒驗過的故事當了自己的判決；同一把尺對準你的點子，就是問一句：到今天為止，有沒有一個真人，真的對它點過頭？',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '訂做自己',      'path' => '/lens/personality-isnt-permanent'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
