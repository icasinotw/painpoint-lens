<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '會聊天的人，都先把對方研究過一遍｜痛點 P.A.I.N.',
  'desc'  => '《跟任何人都可以聊得來》塞了九十二招社交技巧，骨子裡只在練一個動作：把注意力從你自己挪到對方身上。用痛點的眼光重讀：創業者最該補的正是這堂課——開口前先讀對方，動手前先驗需求，別把對方禮貌的點頭當成市場的肯定。',
  'path'  => '/lens/how-to-talk-to-anyone',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《跟任何人都可以聊得來》',
  'heading'   => '會聊天的人，都先把對方研究過一遍',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/how-to-talk-to-anyone.html',
  'book'      => ['name' => '跟任何人都可以聊得來', 'author' => 'Leil Lowndes 萊拉・朗德絲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是講給自己聽，還是真有人要？',
    'body'    => '《跟任何人都可以聊得來》教你開口前先讀懂對方；同樣的動作換到生意上，就是動手前先去確認有沒有人真的痛。趁還沒砸錢、沒寫半行程式，先把你押得最重的那條假設拎出來，去找一個真有這個痛的人，看他上一次為它實際花了多少時間和錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '跟任何人都可以聊得來',  'path' => '/lens/how-to-talk-to-anyone'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
