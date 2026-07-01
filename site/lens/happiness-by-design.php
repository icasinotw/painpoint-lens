<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的快樂,記在一本你從沒打開的注意力帳本裡:用痛點之尺重讀《設計幸福》｜痛點 P.A.I.N.',
  'desc'  => '多倫《設計幸福》證明:快樂不是想通了就有的結論,是你注意力一分一秒生產出來的讀數;想變快樂,靠的不是換一種想法,是改變你做的事、重新設計你的一天。用痛點的眼光重讀:這是把需求驗證調轉過來對準你自己的日子——別再決心要快樂,去量注意力真正花到哪。',
  'path'  => '/lens/happiness-by-design',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《設計幸福》',
  'heading'   => '你的快樂,記在一本你從沒打開的注意力帳本裡',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/happiness-by-design.html',
  'book'      => ['name' => '設計幸福(Happiness by Design)', 'author' => 'Paul Dolan 保羅・多倫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '快樂靠設計,點子也是',
    'body'    => '多倫要你別再決心要快樂,去量注意力真正花到哪,再把好行為設計成不靠意志力的預設;同一套「先量真的、再動手」的紀律,搬到你手上的點子上,就是別急著做,先確認真的有人為它痛。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
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
    ['name' => '設計幸福',  'path' => '/lens/happiness-by-design'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
