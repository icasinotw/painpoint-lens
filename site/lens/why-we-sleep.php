<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '睡不夠的痛，他算到了小數點後面：用痛點之尺重讀《為什麼要睡覺?》｜痛點 P.A.I.N.',
  'desc'  => '《為什麼要睡覺?》最厲害的一手，是把「少睡」這件你今天毫無感覺的事，算成一個刺眼的數字。用痛點的眼光重讀：把痛算得再準也只完成一半，一個你信了卻動不了的痛，半夜只會讓你更睡不著。今晚先別逼自己睡好，替自己設一個會響的「該睡鈴」。',
  'path'  => '/lens/why-we-sleep',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《為什麼要睡覺?》',
  'heading'   => '睡不夠的痛，他算到了小數點後面',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/why-we-sleep.html',
  'book'      => ['name' => '為什麼要睡覺?(Why We Sleep)', 'author' => 'Matthew Walker(馬修・沃克)'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在為哪一個痛，咬牙硬撐？',
    'body'    => '沃克幫你把睡不夠的代價算到很清楚；換個方向，先確認你苦撐的那件事，痛到底有多真、有沒有人正在為它付錢。花幾分鐘把它攤開，比再讀一遍後果有多嚴重更有用。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '為什麼要睡覺?',       'path' => '/lens/why-we-sleep'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
