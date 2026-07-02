<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你盯著投報率，漏算了你手上最大那筆資產：用痛點之尺拆《金錢超思考》｜痛點 P.A.I.N.',
  'desc'  => '喬納森・克雷蒙《金錢超思考》要你把自己當一家公司：年輕時你最大的資產，是你往後三、四十年的賺錢能力。用痛點的眼光重讀，把「你自己值多少」算成一個數字，別再拿放大鏡只盯著存款那一小塊。',
  'path'  => '/lens/how-to-think-about-money',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《金錢超思考》',
  'heading'   => '你盯著投報率，漏算了你手上最大那筆資產',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/how-to-think-about-money.html',
  'book'      => ['name' => '金錢超思考（How to Think About Money）', 'author' => 'Jonathan Clements 喬納森・克雷蒙'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你算了半天別人的帳，這禮拜算一次自己的',
    'body'    => '《金錢超思考》把最大那筆資產指回你自己；痛點這把尺要你把它壓成一個看得見的數字，才知道力氣該往哪放。都是同一個動作：先把手上真正的資產與代價算清楚，你才真的有得選。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '金錢超思考',  'path' => '/lens/how-to-think-about-money'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
