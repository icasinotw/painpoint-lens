<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一屋子的人，是一個你還沒驗過的市場：用痛點之尺重讀《I型優勢2》｜痛點 P.A.I.N.',
  'desc'  => '《I型優勢2》教內向者不必假裝外向，也能織好人脈網。用痛點的眼光重讀：一場人脈局其實是一次需求訪談，內向者的傾聽，剛好是找出「誰在痛」最強的工具。',
  'path'  => '/lens/the-introverts-edge-to-networking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《I型優勢2》',
  'heading'   => '一屋子的人，是一個你還沒驗過的市場',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-introverts-edge-to-networking.html',
  'book'      => ['name' => 'I型優勢2', 'author' => 'Matthew Pollard 馬修・波勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你自己這門生意，站得住嗎？',
    'body'    => '《I型優勢2》教內向者怎麼把對的人接上來；但接上來之前，你得先知道自己能替誰解決什麼痛。用痛點之尺，把這個問題想清楚。',
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
    ['name' => 'I型優勢2', 'path' => '/lens/the-introverts-edge-to-networking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
