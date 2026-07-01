<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '越容易多做一個，它越守不住價值：用痛點之尺重讀《比特幣標準》｜痛點 P.A.I.N.',
  'desc'  => '賽菲迪恩・阿摩斯《比特幣標準》只圍著一個很土的問題轉：一樣東西，別人要再多做出一個，有多難？用痛點的眼光重讀，你手上的點子、你以為的護城河，值不值錢，看的正是同一件事——它是真的難被複製，還是只是現在剛好還沒人來搶。',
  'path'  => '/lens/the-bitcoin-standard',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《比特幣標準》',
  'heading'   => '越容易多做一個，它越守不住價值',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-bitcoin-standard.html',
  'book'      => ['name' => '比特幣標準', 'author' => 'Saifedean Ammous 賽菲迪恩・阿摩斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那樣「優勢」，別人多久能照做一個？',
    'body'    => '阿摩斯拿「別人多容易再多做一個」這把尺，量過人類用過的每一種錢；同一把尺，也能拿去掂你正在做的那門生意、那項本事，到底守不守得住。',
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
    ['name' => '比特幣標準', 'path' => '/lens/the-bitcoin-standard'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
