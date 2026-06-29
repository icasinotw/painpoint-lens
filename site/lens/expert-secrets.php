<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把台下坐滿了，他們真的痛到願意掏錢嗎：用痛點之尺重讀《專家機密》｜痛點 P.A.I.N.',
  'desc'  => '《專家機密》把你的專業變成一場運動，用頓悟故事和完美簡報，把陌生人一路說到掏錢。但這套說服術強到能讓人買下一個其實沒人需要的東西。用 P.A.I.N. 補上它從不檢查的那一格：台下那群被你說動的人，本來就為這件事在痛、在花錢嗎？',
  'path'  => '/lens/expert-secrets',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《專家機密》',
  'heading'   => '你把台下坐滿了，他們真的痛到願意掏錢嗎',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/expert-secrets.html',
  'book'      => ['name' => '專家機密', 'author' => '羅素・布朗森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你準備賣的那個東西，台下真的有人要嗎？',
    'body'    => '《專家機密》教你怎麼把人說到掏錢；說之前，先確認台下那群人本來就為這件事在痛。五分鐘體檢一個點子，看看你要點燃的那把火，底下有沒有真的火種。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '專家機密',  'path' => '/lens/expert-secrets'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
