<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '起跑槍早就響過了：用痛點之尺重讀《什麼才是經營最難的事？》｜痛點 P.A.I.N.',
  'desc'  => '霍羅維茲《什麼才是經營最難的事？》是公司陷入苦戰後的求生聖經，在「怎麼打仗」「錢與跑道」誠實到見血——卻默認你早就選對了山頭。用 P.A.I.N. 之尺補上它跳過的那一格：開打前，先確認山頭上真的有人在痛、在等、會掏錢。',
  'path'  => '/lens/the-hard-thing-about-hard-things',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《什麼才是經營最難的事？》',
  'heading'   => '它把每一場仗都教到滿分，卻沒教你怎麼挑山頭',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/the-hard-thing-about-hard-things.html',
  'book'      => ['name' => '什麼才是經營最難的事？', 'author' => 'Ben Horowitz 本・霍羅維茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你開打之前，先確認那座山頭上真的有人',
    'body'    => '霍羅維茲教你怎麼把仗打贏；《痛點》這把尺，幫你在開打前確認山頭上有沒有人在痛、在等、會掏錢。現在就免費體檢一個點子，五分鐘找出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '什麼才是經營最難的事？', 'path' => '/lens/the-hard-thing-about-hard-things'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
