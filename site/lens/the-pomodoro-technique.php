<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你拖著不做的那件事，也許正在保護你：用痛點之尺重讀《間歇高效率的番茄工作法》｜痛點 P.A.I.N.',
  'desc'  => '西里洛的番茄工作法用一個廚房計時器，把「二十五分鐘」變成對抗拖延的起步引擎，逼你坐下、把大事切成小塊。但它有個盲點：拖延有兩種，一種是該做卻不敢，一種是你身體早就知道不該做——番茄鐘把後面那種訊號，也一起消了音。用痛點的眼光重讀《間歇高效率的番茄工作法》：旋下去之前，先聽那股拖延在說什麼。',
  'path'  => '/lens/the-pomodoro-technique',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《間歇高效率的番茄工作法》',
  'heading'   => '你拖著不做的那件事，也許正在保護你',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-pomodoro-technique.html',
  'book'      => ['name' => '間歇高效率的番茄工作法', 'author' => '法蘭西斯科・西里洛'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你按下計時器之前——這件事，有人在等嗎？',
    'body'    => '別急著用下一顆番茄把它做完。先花十分鐘，去問一個真的可能會用的人：你上一次為這件事頭痛，是什麼時候？問得出答案，再旋下去也不遲。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                       'path' => '/'],
    ['name' => '痛點之尺',                    'path' => '/lens'],
    ['name' => '間歇高效率的番茄工作法',       'path' => '/lens/the-pomodoro-technique'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
