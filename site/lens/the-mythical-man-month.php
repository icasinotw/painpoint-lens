<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '九個女人生不出一個月的孩子：用痛點之尺重讀《人月神話》｜痛點 P.A.I.N.',
  'desc'  => '《人月神話》布魯克斯說，九個女人生不出一個月的孩子，有些事堆再多人月也快不了。用痛點的眼光重讀：你那個點子也在加人月，拿「再寫一個功能、再投一個月」替代那件加不快、也一直沒做的事——問一個陌生人肯不肯為它掏錢。',
  'path'  => '/lens/the-mythical-man-month',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《人月神話》',
  'heading'   => '你拚命加的人月，加不出你最該做的那件事',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-mythical-man-month.html',
  'book'      => ['name' => '人月神話（The Mythical Man-Month）', 'author' => 'Frederick P. Brooks Jr. 佛瑞德・布魯克斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個越做越多的點子，有沒有一個陌生人在等著買單？',
    'body'    => '《人月神話》說有些事堆再多人月也快不了；先看看你那個點子最沒被驗過的，是不是「到底有沒有人要」這一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '人月神話',   'path' => '/lens/the-mythical-man-month'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
