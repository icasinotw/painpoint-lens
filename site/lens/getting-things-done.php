<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你真正的對手，是他桌上那張便利貼：用痛點之尺拆《搞定！》｜痛點 P.A.I.N.',
  'desc'  => '《搞定！》賣了幾百萬本，因為它戳中一個人人都在用便利貼、鬧鐘硬撐的真痛。用 P.A.I.N. 的眼光拆 GTD：克難解法是痛點最誠實的證據，而你的解法只要比那張便利貼還累，使用者就會退回去。',
  'path'  => '/lens/getting-things-done',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《搞定！》',
  'heading'   => '你真正的對手，是他桌上那張便利貼',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/getting-things-done.html',
  'book'      => ['name' => '搞定！：工作效率大師教你事情再多照樣做好的搞定5步驟', 'author' => 'David Allen 大衛・艾倫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的解法，比使用者現在硬撐的爛方法更輕嗎？',
    'body'    => '《搞定！》教你管理任務；《痛點》這把尺，幫你先確認有沒有人在痛、痛到願意換掉舊方法。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '搞定！',    'path' => '/lens/getting-things-done'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
