<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他們找到了市場的公式，然後一起被它埋了：用痛點之尺重讀《撼動華爾街的數學鬼才》｜痛點 P.A.I.N.',
  'desc'  => '史考特・派特森《撼動華爾街的數學鬼才》寫一群數學天才如何算出近乎完美的市場模型，又在二〇〇七年八月一起崩盤。用痛點的眼光重讀：一個只被過去考過、沒被現實反駁過的模型，跟你那張漂亮的試算表，錯在同一個地方——都還沒讓明天投過票。',
  'path'  => '/lens/the-quants',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《撼動華爾街的數學鬼才》',
  'heading'   => '他們找到了市場的公式，然後一起被它埋了',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-quants.html',
  'book'      => ['name' => '撼動華爾街的數學鬼才', 'author' => 'Scott Patterson 史考特・派特森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那份「穩到不行」的計畫，被現實考過了嗎？',
    'body'    => '派特森筆下那群人，敗在只讓過去替模型蓋章、遲遲沒讓現實開口；同一把尺，也能拿去量你正在押注的那份計畫、那張試算表。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '撼動華爾街的數學鬼才', 'path' => '/lens/the-quants'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
