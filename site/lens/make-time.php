<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你挖了一座 App 商店買不到的無底水池｜痛點 P.A.I.N.',
  'desc'  => '《生時間》要你每天挑一件「精選」、清空那些滑不到底的「無限供應的水池」。可你那個還沒人付過錢的產品，本身就是一座 App 商店買不到的無底水池。用痛點之尺重講 Make Time：把明天的精選，挑那件你最不想挑的。',
  'path'  => '/lens/make-time',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《生時間》',
  'heading'   => '你挖了一座 App 商店買不到的無底水池',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/make-time.html',
  'book'      => ['name' => '生時間', 'author' => 'Jake Knapp 傑克・納普、John Zeratsky 約翰・澤拉斯基'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是不是也成了一座無底水池？',
    'body'    => '《生時間》要你把時間從兩個小偷手裡搶回來；《痛點》這把尺，幫你看清你正把搶回來的時間，倒進哪一格還沒被真人驗過的空。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '生時間',    'path' => '/lens/make-time'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
