<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你對壞事的解釋，從沒驗過貨：用痛點之尺重讀《學習樂觀・樂觀學習》｜痛點 P.A.I.N.',
  'desc'  => '塞利格曼在《學習樂觀・樂觀學習》發現，打垮一個人的常不是那件壞事，是他腦裡那套自動播放、卻從沒被查證過的解釋——永久、普遍、都怪我。用痛點的眼光重讀：他要你對自己的悲觀劇本，做痛點要創業者對自己樂觀劇本做的同一個動作——別照單全收，先逼它拿證據出來。',
  'path'  => '/lens/learned-optimism',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《學習樂觀・樂觀學習》',
  'heading'   => '你對壞事的解釋，從沒驗過貨',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/learned-optimism.html',
  'book'      => ['name' => '學習樂觀・樂觀學習', 'author' => 'Martin Seligman（馬汀・塞利格曼）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '壞事一發生，你腦裡那句解釋是怎麼算的？',
    'body'    => '下次低落時，把那件事和你對它的第一句解釋寫下來，逐字問它要證據——那個「永久」「全部」「都怪我」，多半禁不起一次認真的反駁。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '學習樂觀・樂觀學習',       'path' => '/lens/learned-optimism'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
