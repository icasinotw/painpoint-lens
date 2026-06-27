<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那枚每天翻倍的硬幣，你手上那枚是零：用痛點之尺重讀《複利效應》｜痛點 P.A.I.N.',
  'desc'  => '《複利效應》用一枚每天翻倍、月底長成一千多萬的硬幣，把「持續的小事會滾成大東西」講得乾淨又誠實。但那枚硬幣的魔法，全靠第一天它不是零、而是一分錢。用痛點之尺重讀戴倫·哈迪：複利是一台乘數機器，先確認你那個點子有人要、起點不是零，再讓它替你翻倍。',
  'path'  => '/lens/the-compound-effect',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《複利效應》',
  'heading'   => '那枚每天翻倍的硬幣，你手上那枚是零',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-compound-effect.html',
  'book'      => ['name' => '複利效應', 'author' => 'Darren Hardy 戴倫·哈迪'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那枚硬幣，第一天是不是零？',
    'body'    => '《複利效應》教你把「持續」做到滿分；《痛點》這把尺，幫你先確認你拿去翻倍的那個點子，現在到底有沒有人要。免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '複利效應',     'path' => '/lens/the-compound-effect'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
