<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最該懷疑的說書人，是你自己：用痛點之尺重讀《說故事的力量》｜痛點 P.A.I.N.',
  'desc'  => '西蒙斯《說故事的力量》教你用六種故事去影響別人，還小心區分了「影響」和「操縱」。用痛點的眼光重讀：她防的是你拿故事騙別人，卻沒防最容易被騙的第一個人——正在對自己解釋「這一定會成」的你。',
  'path'  => '/lens/the-story-factor',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《說故事的力量》',
  'heading'   => '你最該懷疑的說書人，是你自己',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-story-factor.html',
  'book'      => ['name' => '說故事的力量', 'author' => 'Annette Simmons（安奈特・西蒙斯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先確認故事底下那件事，抽掉故事也站得住',
    'body'    => '西蒙斯教你把故事說到動人；痛點這把尺想先問你——你急著想說的這件事，經不經得起一個不吃你這套的人，冷冷看一遍。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '說故事的力量',    'path' => '/lens/the-story-factor'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
