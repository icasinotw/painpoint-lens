<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你走了以後，你帶的人走得下去嗎：用痛點之尺重讀《僕人領導學》｜痛點 P.A.I.N.',
  'desc'  => '格林里夫造出「僕人領導」時，沒讓它停在姿態上——他把它逼成一個可以驗收的結果：你帶的人有沒有因此變強。用痛點的眼光重讀《僕人領導學》：這不是一道領導題，是一道驗證題；別用「我對他們很好」替自己打分，那是動機、是劇本，真正算數的是他們有沒有長大。',
  'path'  => '/lens/servant-leadership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《僕人領導學》',
  'heading'   => '你走了以後，你帶的人走得下去嗎',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/servant-leadership.html',
  'book'      => ['name' => '僕人領導學（Servant Leadership）', 'author' => 'Robert K. Greenleaf 羅伯・格林里夫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你說你把員工擺第一，他們這一年真的變強了嗎？',
    'body'    => '格林里夫要的不是姿態，是一個驗得出來的結果；先看看你手上這件事，到底是在帶人，還是在被需要。',
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
    ['name' => '僕人領導學', 'path' => '/lens/servant-leadership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
