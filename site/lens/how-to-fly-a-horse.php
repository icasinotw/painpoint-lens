<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把馬養到會飛的那幾年，天上一個等牠的人都沒有：用痛點之尺重讀《如何讓馬飛起來》｜痛點 P.A.I.N.',
  'desc'  => '《如何讓馬飛起來》砸掉「創造靠天才靈光一閃」的神話，告訴你創造是平凡人一步步磨出的笨功夫。用痛點的眼光重讀:艾德蒙的香草之所以甜遍世界，是因為半個世界早就餓著等它——同樣的笨功夫，澆在沒人要的東西上，只會讓你更快撞牆。',
  'path'  => '/lens/how-to-fly-a-horse',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《如何讓馬飛起來》',
  'heading'   => '你把馬養到會飛的那幾年，天上一個等牠的人都沒有',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/how-to-fly-a-horse.html',
  'book'      => ['name' => '如何讓馬飛起來:物聯網之父創新與思考的祕密（How to Fly a Horse）', 'author' => 'Kevin Ashton（凱文・艾希頓）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那身好功夫，澆在有人餓著的東西上了嗎?',
    'body'    => '《如何讓馬飛起來》給你發動引擎的膽量;《痛點》這把尺，幫你在踩油門之前先確認方向有沒有人在等。現在就免費體檢一個點子，五分鐘照出你最心虛的那一軸;或翻翻《痛點》電子書。',
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
    ['name' => '如何讓馬飛起來', 'path' => '/lens/how-to-fly-a-horse'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
