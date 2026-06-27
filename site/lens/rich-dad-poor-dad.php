<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '它教你別被劇本騙，自己卻是賣最好的那套劇本：用痛點之尺拆《富爸爸，窮爸爸》｜痛點 P.A.I.N.',
  'desc'  => '《富爸爸，窮爸爸》遞給你一把好用的尺——把每樣東西標成「把錢放進口袋」或「掏走」。用痛點的眼光重讀：拿同一把尺回頭量這本書自己，再補上它沒教你算的那筆帳——有沒有人真的在為你的點子付錢。',
  'path'  => '/lens/rich-dad-poor-dad',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《富爸爸，窮爸爸》',
  'heading'   => '它教你別被劇本騙，自己卻是賣最好的那套劇本',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/rich-dad-poor-dad.html',
  'book'      => ['name' => '富爸爸，窮爸爸（Rich Dad Poor Dad）', 'author' => 'Robert T. Kiyosaki 羅勃特・清崎'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想靠一個點子跳出老鼠賽跑？先確認有人在痛',
    'body'    => '《富爸爸》讓你看見自己被一套劇本關著；《痛點》這把尺，幫你驗證你想衝過去的下一個點子，是不是真的有人在痛、值不值得做。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '富爸爸，窮爸爸',   'path' => '/lens/rich-dad-poor-dad'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
