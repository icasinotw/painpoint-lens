<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '九種策略的說法，都從你已經開店那天講起：用痛點之尺重讀《策略九說》｜痛點 P.A.I.N.',
  'desc'  => '吳思華《策略九說》把策略拆成九種看法——價值、效率、資源、結構、競局……一門生意能從九個方位被診斷得清清楚楚。用痛點之尺重讀：這九面鏡子全架在「已經有一門生意」上，照得出你怎麼贏，卻照不到最前面那題——你還在賭的點子，外面真的有人要嗎？',
  'path'  => '/lens/nine-strategy-theories',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《策略九說》',
  'heading'   => '九種策略的說法，都從你已經開店那天講起',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/nine-strategy-theories.html',
  'book'      => ['name' => '策略九說', 'author' => '吳思華'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在挑九說裡哪一面鏡子之前，先確認外面有人要',
    'body'    => '吳思華給你九種角度，把一門生意診斷得清清楚楚；痛點之尺幫你補上九說預設你已經跨過的那一格——外面到底有沒有人，正為這件事掏錢。花五分鐘免費體檢一個點子，先確認有人要，再來挑要套哪一說。',
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
    ['name' => '策略九說', 'path' => '/lens/nine-strategy-theories'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
