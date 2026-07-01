<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '好主管，是敢把自己變得可被取代的人：用痛點之尺重讀《未來團隊最需要的最輕量化管理》｜痛點 P.A.I.N.',
  'desc'  => '山田理的《未來團隊最需要的最輕量化管理》，要主管卸下「什麼都得我懂、我決定、我扛」的重量。用痛點的眼光重讀：那個「理想主管」是一齣沒人要你演的漂亮劇本，真正的槓桿是把資訊全倒出來，讓自己不再是團隊的瓶頸。',
  'path'  => '/lens/the-lightest-management',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《未來團隊最需要的最輕量化管理》',
  'heading'   => '好主管，是敢把自己變得可被取代的人',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-lightest-management.html',
  'book'      => ['name' => '未來團隊最需要的最輕量化管理', 'author' => '山田理'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你身上那些重量，還有幾件是真的非扛不可？',
    'body'    => '《未來團隊最需要的最輕量化管理》教你把資訊倒出來、把自己變輕；痛點這把尺，教你在動手之前，先確認一件事到底有沒有人要。同一個動作，也能拿來重新驗一次你手上那些「非做不可」。',
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
    ['name' => '未來團隊最需要的最輕量化管理',  'path' => '/lens/the-lightest-management'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
