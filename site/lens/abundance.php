<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你對未來的悲觀，沒對過一次帳：用痛點之尺重讀《富足》｜痛點 P.A.I.N.',
  'desc'  => '《富足》說你對世界的悲觀，多半不是算出來的，是大腦和新聞聯手替你裝上去的。用痛點的眼光重讀：那些讓你遲遲不敢動的「沒機會了」「來不及了」，你究竟查過數字，還是從來沒去對過帳？',
  'path'  => '/lens/abundance',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《富足》',
  'heading'   => '你對未來的悲觀，沒對過一次帳',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/abundance.html',
  'book'      => ['name' => '富足：解決人類生存難題的重大科技創新（Abundance: The Future Is Better Than You Think）', 'author' => '彼得・戴曼迪斯 Peter Diamandis、史蒂芬・科特勒 Steven Kotler'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂你那台世界感測器之後，順手照一下手上的事',
    'body'    => '戴曼迪斯要你別再憑感覺判斷世界好壞，改去查真實的數字。同一個動作，也能拿來照你手上正在做的決定：那個讓你遲遲不敢動的理由，到底是你查過的，還是你猜的。',
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
    ['name' => '富足',     'path' => '/lens/abundance'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
