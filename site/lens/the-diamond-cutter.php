<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '點子有多好，那顏色是你自己染上去的｜痛點 P.A.I.N.',
  'desc'  => '羅區格西用《金剛經》的「空性」把鑽石公司做到上億：事物本身不帶好壞，你看到的好，是你心裡投射上去的。用痛點之尺重讀《當和尚遇到鑽石》——你那個越想越興奮的點子，它的「好」有多少是你自己染上去的？先讓市場掏錢替它驗一次色，別只信你單方面刷的那一手。',
  'path'  => '/lens/the-diamond-cutter',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《當和尚遇到鑽石》',
  'heading'   => '點子有多好，那顏色是你自己染上去的',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-diamond-cutter.html',
  'book'      => ['name' => '當和尚遇到鑽石', 'author' => 'Geshe Michael Roach 麥可・羅區格西'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，你敢拿去給陌生人鑑定嗎？',
    'body'    => '羅區要你往內種好種子；痛點這把尺要你走出門，讓第一個肯掏錢的陌生人，告訴你它到底是玉，還是一塊你看了很久的石頭。',
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
    ['name' => '當和尚遇到鑽石',   'path' => '/lens/the-diamond-cutter'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
