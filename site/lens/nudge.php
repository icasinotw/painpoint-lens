<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點的眼光看《推力》：你問來的「我會用」，是一個不存在的人在回答｜痛點 P.A.I.N.',
  'desc'  => '《推力》把人分成「經濟人」和「真實的人」——回答你問卷的是前者，真正會不會用你產品的是後者。用痛點的眼光拆它：為什麼你的需求驗證在跟一個不存在的人說話，摩擦與預設值為什麼比你的點子多好更能決定生死，以及它幫得到你、幫不到你的那條線。',
  'path'  => '/lens/nudge',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《推力》',
  'heading'   => '你問來的「我會用」，是一個不存在的人在回答',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/nudge.html',
  'book'      => ['name' => '推力（Nudge）', 'author' => 'Richard H. Thaler 理查・塞勒、Cass R. Sunstein 凱斯・桑思汀'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在設計預設值之前，先確認有人在痛',
    'body'    => '《推力》教你怎麼把好東西送進人手裡；但它假設那件好事已經有人要。動手做一個點子之前，先用《痛點》這把尺驗一件更早的事：真的有人在為它掏錢、繞路、硬撐嗎。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '推力',      'path' => '/lens/nudge'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
