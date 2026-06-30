<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '光是讓人感動，養不活一家社會企業：用痛點之尺重讀《社企力》｜痛點 P.A.I.N.',
  'desc'  => '《社企力》讓「做好事又能獲利」變得理直氣壯，卻把燈光都打在成功案例上。用痛點的眼光補一刀：感動換不來營收，你要解的那件好事，得先確認外面有一群人願意持續掏錢買單。',
  'path'  => '/lens/social-enterprise-power',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《社企力》',
  'heading'   => '光是讓人感動，養不活一家社會企業',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/social-enterprise-power.html',
  'book'      => ['name' => '社企力：社會企業——做好事又能獲利的新經濟力量，改變世界的工作新選擇', 'author' => '社企流'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你想做的那件好事，有人會持續買單嗎？',
    'body'    => '《社企力》替你打開「做好事又能賺錢」這個選項；真要動手前，先用痛點的眼光確認：你要解的那件好事，外面有沒有一群人願意持續掏自己的錢。五分鐘體檢一個你心裡的點子。',
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
    ['name' => '社企力',    'path' => '/lens/social-enterprise-power'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
