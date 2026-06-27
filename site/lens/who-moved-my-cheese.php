<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '哼哼先說服了自己，乳酪一定會回來：用痛點之尺重讀《誰搬走了我的乳酪？》｜痛點 P.A.I.N.',
  'desc'  => '《誰搬走了我的乳酪？》大家都記得「要像老鼠一樣勇於改變」，但哼哼走不了的真正原因，是他太會想——他替自己編了一個「乳酪會回來」的完整故事，躲了進去。用痛點的眼光重讀：你那個遲遲不肯拿去驗的點子，配的正是哼哼這套劇本——「市場還沒懂我」「再加兩個功能就引爆」。老鼠贏在牠們簡單到騙不了自己，乳酪沒了就直接去看。這禮拜把你替點子講過的安慰話抄下來，認出它就是哼哼寫在牆上的「會回來」，再走出門找一個願意現在掏錢的真人。',
  'path'  => '/lens/who-moved-my-cheese',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《誰搬走了我的乳酪？》',
  'heading'   => '哼哼先說服了自己，乳酪一定會回來',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/who-moved-my-cheese.html',
  'book'      => ['name' => '誰搬走了我的乳酪？', 'author' => 'Spencer Johnson 史賓賽・強森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你把「再等等就會紅」讀到天荒地老之前',
    'body'    => '《誰搬走了我的乳酪？》教你別賴在空了的乳酪站前面等它回來；《痛點》這把尺，幫你分清楚你想衝去找的那塊新乳酪，是真的有人在等，還是又一塊你自己畫在牆上的。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '誰搬走了我的乳酪？',   'path' => '/lens/who-moved-my-cheese'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
