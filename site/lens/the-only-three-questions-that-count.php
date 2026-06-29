<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把你最篤定的那件事，當成還沒驗的假設｜痛點 P.A.I.N.',
  'desc'  => '肯恩・費雪《投資最重要的3個問題》要你把深信不疑的定見退回成可否證的假設、再親手驗它。用痛點的眼光重讀：你那個點子裡最危險的，不是還沒想到的對手，是那一排「一定有人要」從沒被你驗過的信念。',
  'path'  => '/lens/the-only-three-questions-that-count',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《投資最重要的3個問題》',
  'heading'   => '把你最篤定的那件事，當成還沒驗的假設',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-only-three-questions-that-count.html',
  'book'      => ['name' => '投資最重要的3個問題', 'author' => 'Ken Fisher 肯恩・費雪'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，最想騙過你的人是誰？',
    'body'    => '費雪要投資人把深信的事退回成假設、再去驗；同一把尺，借來戳你那個點子裡從沒驗過的「一定」。',
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
    ['name' => '投資最重要的3個問題',  'path' => '/lens/the-only-three-questions-that-count'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
