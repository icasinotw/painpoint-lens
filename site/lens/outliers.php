<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '成功的食譜，印漏了你抄不到的那一半：用痛點之尺重讀《異數》｜痛點 P.A.I.N.',
  'desc'  => '《異數》把「他很努力又有才華所以成功」的故事翻過來，讓你看見底下藏著一整排你抄不到的東西——出生的年份、撞上的時機、別人沒有的機會。用痛點的眼光重讀：把你想照抄的成功拆成「抄得到的」和「抄不到的」，再去驗一件它不負責的事——你自己的點子，外面到底有沒有人要。',
  'path'  => '/lens/outliers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《異數》',
  'heading'   => '成功的食譜，印漏了你抄不到的那一半',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/outliers.html',
  'book'      => ['name' => '異數（Outliers：The Story of Success）', 'author' => 'Malcolm Gladwell 麥爾坎·葛拉威爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在照抄別人的成功之前，先驗你自己的點子',
    'body'    => '《異數》幫你看穿別人成功背後那些抄不到的條件；痛點這把尺，幫你回答它跳過的那一題——你自己想做的這個，外面到底有沒有人在痛、會不會掏錢。花五分鐘免費體檢一個點子，看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '異數',     'path' => '/lens/outliers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
