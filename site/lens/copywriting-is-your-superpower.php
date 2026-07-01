<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => 'Vista 教你戳中痛點，前提是那個痛真的存在｜痛點 P.A.I.N.',
  'desc'  => '《文案力就是你的鈔能力》教你把話寫進讀者心裡、戳中他的痛點。但它預設那個痛已經存在。用痛點的眼光重讀鄭緯筌 Vista 這本書：文案像提款機，領得出的是戶頭裡本來就有的錢——先確認那個痛真的有人在付錢解決，再動筆。',
  'path'  => '/lens/copywriting-is-your-superpower',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《文案力就是你的鈔能力》',
  'heading'   => 'Vista 教你戳中痛點，前提是那個痛真的存在',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/copywriting-is-your-superpower.html',
  'book'      => ['name' => '文案力就是你的鈔能力', 'author' => '鄭緯筌 Vista'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '文案戳的那個痛，你確認過真的存在嗎？',
    'body'    => 'Vista 教你把痛寫得動人；痛點之尺幫你先確認，那個痛真的有人在花錢解決。',
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
    ['name' => '文案力就是你的鈔能力',  'path' => '/lens/copywriting-is-your-superpower'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
