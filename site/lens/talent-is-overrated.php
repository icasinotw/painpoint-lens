<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你練得很勤，卻全練在不會痛的地方：用痛點之尺重讀《我比別人更認真》｜痛點 P.A.I.N.',
  'desc'  => '柯文在《我比別人更認真》裡證明，莫札特、老虎伍茲那種「天分」，多半是你沒看見的十年苦練。用痛點的眼光重讀：你堆的時數，幾乎全花在早就會、做了不痛的事上;那件做了會痛、卻真正決定成敗的練習，你一直繞過去。',
  'path'  => '/lens/talent-is-overrated',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《我比別人更認真》',
  'heading'   => '你練得很勤，卻全練在不會痛的地方',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/talent-is-overrated.html',
  'book'      => ['name' => '我比別人更認真：刻意練習讓自己發光', 'author' => 'Geoff Colvin 傑夫・柯文'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '「我沒天分」跟「沒人要」，常常是同一句藉口',
    'body'    => '一個說你不必再練，一個說你不必再驗——兩句都太好用，好用到值得你懷疑一次。換一篇拆書，繼續拿這把尺戳下去。',
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
    ['name' => '我比別人更認真',  'path' => '/lens/talent-is-overrated'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
