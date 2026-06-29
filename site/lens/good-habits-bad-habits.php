<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他肯為它忍多少麻煩,那個痛就有多真:用痛點之尺重讀《習慣力》｜痛點 P.A.I.N.',
  'desc'  => '溫蒂・伍德《習慣力》主張：自律的人其實最少用到自律，他們靠的不是決心，是把「摩擦力」調對——好習慣弄到不費力、壞習慣前面多疊幾道麻煩。用痛點的眼光重讀：同一把摩擦尺掉頭往門外量，一個人此刻為了解決某個痛願意忍下多少麻煩，就是那個痛有多真、最誠實的一支溫度計。今晚就去數一個人為這件事忍下的麻煩。',
  'path'  => '/lens/good-habits-bad-habits',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《習慣力》',
  'heading'   => '他肯為它忍多少麻煩,那個痛就有多真',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/good-habits-bad-habits.html',
  'book'      => ['name' => '習慣力(Good Habits, Bad Habits: The Science of Making Positive Changes That Stick)', 'author' => 'Wendy Wood 溫蒂・伍德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '有人正在為這件事忍麻煩嗎?',
    'body'    => '伍德教你把自己的摩擦調對；把同一把尺掉頭往門外量，先看有沒有人已經在為你想解的那件事，忍著一身麻煩硬撐——那身麻煩，就是這個痛到底有多真的讀數。',
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
    ['name' => '習慣力',    'path' => '/lens/good-habits-bad-habits'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
