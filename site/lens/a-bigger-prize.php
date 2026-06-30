<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《未來的競爭力不是競爭》｜痛點 P.A.I.N.',
  'desc'  => '赫弗南把競爭藏起來的帳單一張張攤開：禁藥、強制排名、被競爭泡到出事的金融業。用痛點之尺重讀：競爭最方便的地方，是它替你準備好一個對手和一個分數，剛好讓你不必去碰那個更難的問題——你拚命要做的東西，外面到底有沒有人要。你可以贏遍整條街的對手，最後贏得一個沒人想買的市場。這禮拜，把對手的名字劃掉，改寫三個會掏錢買的真人。',
  'path'  => '/lens/a-bigger-prize',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《未來的競爭力不是競爭》',
  'heading'   => '贏家拿走的，可能是一個沒人要的獎盃',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/a-bigger-prize.html',
  'book'      => ['name' => '未來的競爭力不是競爭', 'author' => 'Margaret Heffernan 瑪格麗特・赫弗南'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別讓「贏過對手」，蓋住「有沒有人要」',
    'body'    => '計分板讓你天天覺得自己在前進，卻沒有一格在問外面有沒有人要——這禮拜，把你最較勁的那個點子，放回「有沒有人掏錢」這條線上看一眼。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '未來的競爭力不是競爭',       'path' => '/lens/a-bigger-prize'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
