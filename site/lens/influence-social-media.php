<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把喇叭交給網紅前，先確認你有話值得喊：用痛點之尺重讀《網紅影響力》｜痛點 P.A.I.N.',
  'desc'  => '《網紅影響力》把網紅經濟的信任轉移拆得通透，卻預設你已經有一個值得被放大的東西。用痛點之尺補上它沒問的那一格：在借嗓子之前，先確認底下真的有人在等。',
  'path'  => '/lens/influence-social-media',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《網紅影響力》',
  'heading'   => '把喇叭交給網紅前，先確認你有話值得喊',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/influence-social-media.html',
  'book'      => ['name' => '網紅影響力：在社群媒體深入生活的年代，看品牌、消費與我們的未來', 'author' => 'Sara McCorquodale 莎拉・麥柯克戴爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在請人放大之前，先確認有人要',
    'body'    => '《網紅影響力》教你怎麼借到最好的嗓子；要不要先確認你那句話本來就有人想聽？花五分鐘，用痛點之尺把「到底有沒有人要」這一格走一遍。',
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
    ['name' => '網紅影響力', 'path' => '/lens/influence-social-media'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
