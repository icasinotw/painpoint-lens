<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把最清醒的腦力，押在最沒驗證過的事上：用痛點之尺重讀《上線時間管理術》｜痛點 P.A.I.N.',
  'desc'  => '馬丁《上線時間管理術》把「有生產力」重新定義成一種叫「上線時間」的狀態：腦子清醒、做的剛好是該做的事。用痛點的眼光重讀：你每天清空的那幾十件事，多半沒被驗過該不該做——先確認這件事真的重要、真的是那個痛，再把你最清醒的兩三個鐘頭押上去。',
  'path'  => '/lens/uptime',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《上線時間管理術》',
  'heading'   => '你把最清醒的腦力，押在最沒驗證過的事上',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/uptime.html',
  'book'      => ['name' => '上線時間管理術(Uptime)', 'author' => 'Laura Mae Martin 蘿拉・梅・馬丁'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '管時間，其實是逼你先驗證',
    'body'    => '馬丁要你把最清醒的兩三個鐘頭守起來，只放最重要的事進去；同一套「先確認再動手」的紀律，換到你手上的點子，就是別急著做，先確認真的有人為它痛。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
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
    ['name' => '上線時間管理術',  'path' => '/lens/uptime'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
