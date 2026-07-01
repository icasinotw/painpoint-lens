<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '驗到有人想要，還不算驗完：用痛點之尺重讀《震盪效應》｜痛點 P.A.I.N.',
  'desc'  => '馬修・迪克森《震盪效應》聽完兩百五十萬通銷售錄音，發現殺死案子的頭號兇手不是對手，是客戶怕買錯、乾脆什麼都不決定。用痛點的眼光重讀：你以為驗到「有人想要」就過關，但想要跟真的掏錢中間，還隔著一層「怕選錯」的恐懼——那一層，才是多數點子真正卡住的地方。',
  'path'  => '/lens/the-jolt-effect',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《震盪效應》',
  'heading'   => '驗到有人想要，還不算驗完',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-jolt-effect.html',
  'book'      => ['name' => '震盪效應', 'author' => 'Matthew Dixon 馬修・迪克森、Ted McKenna 泰德・麥肯納'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子被「我再想想」拖住了，是不夠痛，還是怕選錯？',
    'body'    => '迪克森發現，很多客戶不是不想要，是不敢賭錯；同一道分辨，也能拿去看你手上那個遲遲推不動的點子——先確認到底有沒有人真的在痛。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '震盪效應',   'path' => '/lens/the-jolt-effect'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
