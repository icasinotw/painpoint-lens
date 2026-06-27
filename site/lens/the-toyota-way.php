<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '豐田叫主管滾去現場站著看，你的點子卻只活在你腦子裡｜痛點 P.A.I.N.',
  'desc'  => '《豐田模式》的命根是「現地現物」——親自到現場用眼睛看，別靠報表管事。可你那個創業點子，從沒被你站著看過一眼。用痛點之尺重講大野耐一的圈：你的現場，是有人正為這個痛吃苦的地方。',
  'path'  => '/lens/the-toyota-way',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《豐田模式》',
  'heading'   => '豐田叫主管滾去現場站著看，你的點子卻只活在你腦子裡',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-toyota-way.html',
  'book'      => ['name' => '豐田模式：精實標竿企業的14大管理原則', 'author' => 'Jeffrey K. Liker 傑弗瑞・萊克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那份點子報表，哪一格其實是空的？',
    'body'    => '《豐田模式》教你別靠報表、親自到現場看；《痛點》這把尺，幫你看清你的點子最該先去現場補的是哪一格。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '豐田模式',  'path' => '/lens/the-toyota-way'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
