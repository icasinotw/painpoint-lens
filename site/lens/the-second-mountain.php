<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你花二十年，爬一座沒人替你驗過的山｜痛點 P.A.I.N.',
  'desc'  => '大衛・布魯克斯《第二座山》說，第一座山是社會發給每個人的同一張劇本，很多人爬到頂才發現上面是空的。用痛點之尺重讀：那張人生劇本，是別人替你拍板的規格，你卻從沒替自己驗過——這禮拜，補做一次你欠自己的需求驗證。',
  'path'  => '/lens/the-second-mountain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《第二座山》',
  'heading'   => '你花二十年，爬一座沒人替你驗過的山',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-second-mountain.html',
  'book'      => ['name' => '第二座山', 'author' => '大衛・布魯克斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '正埋頭追一個目標，卻越來越說不出它為什麼重要？',
    'body'    => '布魯克斯逼你回頭驗一件事：這座山，當初到底是不是你要爬的。趁還在半路，花五分鐘把那筆一直繞著走的代價，誠實算一遍。',
    'primary' => ['url' => '/tool', 'label' => '免費替我的點子做需求驗證'],
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
    ['name' => '第二座山',     'path' => '/lens/the-second-mountain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
