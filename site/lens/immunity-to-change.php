<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你改不掉的事，正在幫你躲一件更怕的事：用痛點之尺重讀《變革抗拒》｜痛點 P.A.I.N.',
  'desc'  => '凱根與拉赫在《變革抗拒》裡說：你改不動，常常不是不夠努力——你同時藏著一個跟目標打對台的承諾，底下還壓著一句你從沒驗過的假設。用痛點的眼光重讀：把你每次破功讀成一張反對票，先找出你真正在保護的是什麼，再用一個便宜的小實驗，去戳那個你怕了好幾年、卻從沒查證過的假設。',
  'path'  => '/lens/immunity-to-change',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《變革抗拒》',
  'heading'   => '你改不掉的事，正在幫你躲一件更怕的事',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/immunity-to-change.html',
  'book'      => ['name' => '變革抗拒', 'author' => 'Robert Kegan（羅伯特・凱根）、Lisa Laskow Lahey（麗莎・拉赫）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最想改、卻一直沒改成的那件事，是哪一件？',
    'body'    => '別急著再逼自己一次。先把它寫下來，問自己一句：如果停掉那些扯後腿的小動作，我會開始擔心什麼？那個擔心，才是真正擋住你的東西。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '變革抗拒',       'path' => '/lens/immunity-to-change'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
