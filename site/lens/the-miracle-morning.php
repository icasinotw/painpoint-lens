<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《上班前的關鍵1小時》｜痛點 P.A.I.N.',
  'desc'  => '埃爾羅德的 SAVERS 晨間儀式，是照他車禍重生、負債谷底的痛裁出來的，書卻把它當成所有人的處方。用痛點的眼光重讀：在把鬧鐘往前撥一小時之前，先替自己的早晨做一次需求驗證，確認早晨真的是你那個痛的槓桿，別把別人對症的藥，當成自己的處方照吃。',
  'path'  => '/lens/the-miracle-morning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《上班前的關鍵1小時》',
  'heading'   => '在把鬧鐘調早一小時之前，先確認早晨是你的槓桿',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-miracle-morning.html',
  'book'      => ['name' => '上班前的關鍵1小時（The Miracle Morning）', 'author' => 'Hal Elrod（哈爾・埃爾羅德）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '早晨真的是你那個痛的槓桿嗎？',
    'body'    => '在把鬧鐘往前撥一小時、開始操練 SAVERS 之前，先花五分鐘替自己的早晨做一次需求驗證：你每天付代價的那件事，到底是「開場太亂」，還是「方向沒定」？答對了，這套儀式才撬得動你的人生。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                      'path' => '/'],
    ['name' => '痛點之尺',                   'path' => '/lens'],
    ['name' => '上班前的關鍵1小時',           'path' => '/lens/the-miracle-morning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
