<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你操了兩年的，是早就推得動的那組重量：用痛點之尺重讀《一流的人如何保持顛峰》｜痛點 P.A.I.N.',
  'desc'  => '《一流的人如何保持顛峰》兩位作者史托伯格與麥格尼斯，把頂尖表現拆成一條算式：壓力加休息等於成長，而且你只長出你壓到的那條肌肉。用痛點之尺重讀——你那個點子操了兩年，壓力全下在早就練滿的「把東西做出來」那條，唯一決定生意死活的「有沒有人要」那條從沒被壓過，還停在第一天的零。',
  'path'  => '/lens/peak-performance',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一流的人如何保持顛峰》',
  'heading'   => '練了兩年，最該練的那條肌肉你從沒壓過',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/peak-performance.html',
  'book'      => ['name' => '一流的人如何保持顛峰（Peak Performance: Elevate Your Game, Avoid Burnout, and Thrive with the New Science of Success）', 'author' => 'Brad Stulberg 布萊德・史托伯格、Steve Magness 史蒂夫・麥格尼斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，操練了兩年，卻從沒讓一個陌生人考過？',
    'body'    => '別再多練一個版本了。趁它還只是個念頭，連同一個真實的價格，擺到一個沒理由給你面子的陌生人面前，看他肯不肯當場掏錢——那一下手心冒汗的考驗，才是真正會讓這門生意長出來的第一組重量。',
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
    ['name' => '一流的人如何保持顛峰',  'path' => '/lens/peak-performance'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
