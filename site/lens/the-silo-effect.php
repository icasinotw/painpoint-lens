<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《穀倉效應》｜痛點 P.A.I.N.',
  'desc'  => '邰蒂用人類學拆穿大公司怎麼栽：Sony 什麼都不缺，卻被切成一座座只顧自己的穀倉，做出一堆沒人協調的播放器，輸給一台 iPod。用痛點之尺重讀：穀倉是聰明公司「做出沒人要的東西」的標準機制，而它先長在每個人腦子裡——就算你的團隊只有你一個，照樣會把自己關進「我愛的這個產品」那座穀倉。借一雙外人的眼睛，看見格子外面那個最要命的問題。',
  'path'  => '/lens/the-silo-effect',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《穀倉效應》',
  'heading'   => '沒人要的東西，常是每個人都做對的東西',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-silo-effect.html',
  'book'      => ['name' => '穀倉效應', 'author' => 'Gillian Tett 吉蓮・邰蒂'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別讓忙碌，蓋住「到底有沒有人要」',
    'body'    => '穀倉讓每個人都交得出滿分的局部，卻沒人回頭問整件事有沒有人要——這禮拜，借一雙外人的眼睛，看你最寶貝的那個點子。',
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
    ['name' => '穀倉效應',  'path' => '/lens/the-silo-effect'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
