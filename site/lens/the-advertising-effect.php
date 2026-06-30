<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '態度被你拉過去，鬆手就彈回來：用痛點之尺重讀《關鍵行銷》｜痛點 P.A.I.N.',
  'desc'  => '亞當·費里爾《關鍵行銷》把行銷的箭頭調了頭——先讓人做一個小動作，態度自己追上來。這一手很利，卻有個沒講出口的預設：它假設那個動作底下本來就有人需要。用 P.A.I.N. 補一刀：技巧撬得動一次動作，撐不起一個沒有真痛的需求。',
  'path'  => '/lens/the-advertising-effect',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《關鍵行銷》',
  'heading'   => '態度被你拉過去，鬆手就彈回來',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-advertising-effect.html',
  'book'      => ['name' => '關鍵行銷', 'author' => 'Adam Ferrier 亞當·費里爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你撬來的那個動作，底下有痛撐著嗎？',
    'body'    => '費里爾教你讓人先動手，態度自己追上來；痛點之尺再問一句：那個動作底下，是真有人在花錢解的痛，還是你靠技巧撬出來的一次性？五分鐘，把心裡那個顧客跟現實對一次。',
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
    ['name' => '關鍵行銷',  'path' => '/lens/the-advertising-effect'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
