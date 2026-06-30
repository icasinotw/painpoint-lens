<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '結果變好，你就以為自己做對了：用痛點之尺重讀《聰明思考》｜痛點 P.A.I.N.',
  'desc'  => '《聰明思考》把科學家的思考工具搬進日常——回歸均值、相關不等於因果、基本歸因謬誤，全在教你別太快相信自己對結果的解釋。用痛點的眼光拆它：為什麼「我一改、數字就漲」是你講給自己聽、最順耳也最沒被驗過的故事，以及它幫得到你、幫不到你的那條線。',
  'path'  => '/lens/mindware',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《聰明思考》',
  'heading'   => '結果變好，你就以為自己做對了',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/mindware.html',
  'book'      => ['name' => '聰明思考（Mindware）', 'author' => 'Richard E. Nisbett 李查・尼茲比'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在替自己邀功之前，先寫下那個無聊的解釋',
    'body'    => '《聰明思考》給你一副不容易被自己騙的眼睛，但證據還是得你親自去拿。想知道你那個「一定有人要」的判斷站不站得住，用《痛點》這把尺看一眼：你手上的，是真有人在痛的證據，還是你自己腦補的一條因果線。',
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
    ['name' => '聰明思考',  'path' => '/lens/mindware'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
