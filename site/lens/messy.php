<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把計畫磨到完美的那個下午，你一個客戶都還沒問過：用痛點之尺重讀《亂，但是更好》｜痛點 P.A.I.N.',
  'desc'  => '《亂，但是更好》說過度整齊會把「逼你變強的摩擦」一起掃掉。把這把尺移到你的點子上會更刺：那份磨到完美的計畫書，可能只是焦慮的收納盒，幫你繞過了最該做的一步——走出門，問一個真人會不會付錢。',
  'path'  => '/lens/messy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《亂，但是更好》',
  'heading'   => '把計畫磨到完美的那個下午，你一個客戶都還沒問過',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/messy.html',
  'book'      => ['name' => '亂，但是更好（Messy: The Power of Disorder to Transform Our Lives）', 'author' => 'Tim Harford（提姆・哈福特）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那份計畫，幫你繞過了哪個真人？',
    'body'    => '《亂，但是更好》給你勇氣擁抱混亂；《痛點》這把尺，幫你先看清楚哪一種混亂該今天就去碰。現在就免費體檢一個點子，五分鐘照出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '亂，但是更好', 'path' => '/lens/messy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
