<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他們圍著你的原型說「我好喜歡」，就是沒人問多少錢：用痛點之尺重讀《設計思考改造世界》｜痛點 P.A.I.N.',
  'desc'  => '《設計思考改造世界》把好點子畫成三個交疊的圈——合意性、技術可行、商業存續，再用同理心和原型把「有人想要」催到滿。用痛點的眼光看：布朗量「想要」，量的是人喜不喜歡、會不會用，不是會不會掏錢；圍著原型點頭的那群人，常常一個都不會買。',
  'path'  => '/lens/change-by-design',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《設計思考改造世界》',
  'heading'   => '他們圍著你的原型說「我好喜歡」，就是沒人問多少錢',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/change-by-design.html',
  'book'      => ['name' => '設計思考改造世界', 'author' => 'Tim Brown 提姆・布朗'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的原型換來一堆「我好喜歡」，但有人會買嗎？',
    'body'    => '《設計思考改造世界》教你用同理心和原型，做出人人都說想要的東西；《痛點》這把尺，幫你先確認那份「想要」會不會變成真的掏錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '設計思考改造世界',  'path' => '/lens/change-by-design'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
