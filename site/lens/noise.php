<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你問來的「有人要」，是一把會抖的尺量出來的：用痛點之尺重讀《雜訊》｜痛點 P.A.I.N.',
  'desc'  => '《雜訊》講康納曼三人最在意的一件事：人的判斷會散，而且散得比你以為的多——同一件事換個日子、換個人，答案就飄。用痛點的眼光重讀：你拿來確認「真的有人要」的那把尺，刻度本身就在跳，而你總挑那個最順眼的讀數寫進心裡。這禮拜把你那些「有人要」分成兩欄，看清哪些是會飄的雲、哪些是釘得住的點。',
  'path'  => '/lens/noise',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《雜訊》',
  'heading'   => '你問來的「有人要」，是一把會抖的尺量出來的',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/noise.html',
  'book'      => ['name' => '雜訊：人類判斷的缺陷（Noise：A Flaw in Human Judgment）', 'author' => 'Daniel Kahneman 康納曼、Olivier Sibony 西波尼、Cass R. Sunstein 桑思汀'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '量「有人要」之前，先校準你那把尺',
    'body'    => '《雜訊》讓你看見判斷會散；痛點這把尺，幫你回答它不碰的下一題——你手上這個點子，外面到底有沒有人在痛、會不會掏錢。花五分鐘免費體檢一個點子，看出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '雜訊',     'path' => '/lens/noise'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
