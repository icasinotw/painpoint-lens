<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《零秒思考力》｜痛點 P.A.I.N.',
  'desc'  => '赤羽雄二的《零秒思考力》把思考訓練壓成一個動作：一張A4紙、一分鐘、寫滿四行，一天十張，練到遇事零秒就想透。用痛點的眼光重讀：它教你把題目想到飛快，卻沒幫你確認那題目對不對。動手把一件事想到零秒之前，先確認它是你真正在痛、真正該解的那件事，別用一分鐘的效率，去成就一個三個月的彎路。',
  'path'  => '/lens/zero-second-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《零秒思考力》',
  'heading'   => '在寫滿十張紙之前，先寫對那一張',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/zero-second-thinking.html',
  'book'      => ['name' => '零秒思考力（ゼロ秒思考）', 'author' => '赤羽雄二（Akaba Yuji）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你寫得飛快的那個題目，是對的題目嗎？',
    'body'    => '在把一件事想到零秒之前，先花一分鐘做一件更前面的事：把你最近反覆在想的那件事寫成標題，逼自己在底下寫出它每天到底扣你多少。確認那是你真正該解的題，這套A4紙才撬得動你的人生。',
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
    ['name' => '零秒思考力',     'path' => '/lens/zero-second-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
