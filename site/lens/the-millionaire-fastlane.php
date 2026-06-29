<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '想賺幾百萬，先找到那一個正在痛的人:用痛點之尺重讀《快速致富》｜痛點 P.A.I.N.',
  'desc'  => '狄馬哥在《快速致富》反覆喊「別追錢，去追需求」，還給了 CENTS 這把篩生意的尺。用痛點的眼光重讀：他把山指對了，卻把最關鍵的第一步留給你——動手蓋你的快車道之前，怎麼先找到一個正在為這件事掏錢的真人，確認那個需求不是你腦補出來的。',
  'path'  => '/lens/the-millionaire-fastlane',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《快速致富》',
  'heading'   => '想賺幾百萬，先找到那一個正在痛的人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-millionaire-fastlane.html',
  'book'      => ['name' => '快速致富(The Millionaire Fastlane)', 'author' => 'MJ DeMarco MJ・狄馬哥'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你動手蓋快車道之前，先補做那一格需求驗證',
    'body'    => '狄馬哥教你把生意蓋成一台服務很多人的系統；這把尺，幫你先確認外面真的有人在等。拿一個你心裡的點子來跑跑看，五分鐘照出你最弱的那一軸。',
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
    ['name' => '快速致富',  'path' => '/lens/the-millionaire-fastlane'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
