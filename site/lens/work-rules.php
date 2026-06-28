<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '面試官的直覺幾乎測不準，你那個點子也是你頭十秒就錄取的：用痛點之尺重讀《Google 超級用人學》',
  'desc'  => '拉茲洛・博克在《Google 超級用人學》裡證明，面試官的直覺幾乎測不準——人在頭十秒就下好了判決。用痛點之尺重讀：你那個「一定有人要」的點子，也是你頭十秒就錄取的；Google 拆掉直覺那三步，正好拿來給它補一場從沒真正經歷的面試。',
  'path'  => '/lens/work-rules',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《Google 超級用人學》',
  'heading'   => '那個點子，是你頭十秒就錄取的',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/work-rules.html',
  'book'      => ['name' => 'Google 超級用人學(Work Rules!)', 'author' => 'Laszlo Bock 拉茲洛・博克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「一定有人要」的點子，敢不敢補一場它從沒經歷的面試？',
    'body'    => '你早在頭十秒就錄取了自己的點子。趁押上下一個一兩年之前，照 Google 拆掉直覺那三步給它補一場面試——先寫死問題、去問會掏錢的真人、照事先畫好的那條線打分。',
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
    ['name' => 'Google 超級用人學',  'path' => '/lens/work-rules'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
