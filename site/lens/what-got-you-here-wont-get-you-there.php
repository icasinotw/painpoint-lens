<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '讓你聽不見市場的，正是你最得意的那幾件事：用痛點之尺重讀《UP學》｜痛點 P.A.I.N.',
  'desc'  => '《UP學》發現越成功的人越聽不進真話，因為過去的成功被讀成「我這樣做才成功」的鐵證。用痛點的眼光重讀：抱著點子不放的創業者，正是那個聽不見市場搖頭的成功者——你最該主動去討的，是一聲陌生人的「不要」。',
  'path'  => '/lens/what-got-you-here-wont-get-you-there',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《UP學》',
  'heading'   => '讓你聽不見市場的，正是你最得意的那幾件事',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/what-got-you-here-wont-get-you-there.html',
  'book'      => ['name' => 'UP學：所有經理人相見恨晚的一本書', 'author' => 'Marshall Goldsmith 馬歇爾・葛史密斯、Mark Reiter 馬克・賴特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那個點子，陌生人肯不肯付錢？',
    'body'    => '《UP學》教成功的人主動去討最不想聽的真話；《痛點》這把尺，幫你聽見市場那一聲最值錢的「不要」。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => 'UP學',     'path' => '/lens/what-got-you-here-wont-get-you-there'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
