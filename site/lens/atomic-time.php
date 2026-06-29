<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最自律的那一小時，可能正餵著一個沒人要的東西：用痛點之尺重讀《原子時間》｜痛點 P.A.I.N.',
  'desc'  => '柳韓彬的《原子時間》教你拿碼錶把一天記成一本帳、守住每天一小段只屬於你的時間。但這本時間帳有一個格子她沒要你填：你那麼用力守下來、投進去的那件事，到底有沒有人要？用痛點的眼光重讀：帳本記得了你花多少，記不出那一小時值不值。這禮拜，給你的時間帳多開一欄——你是在打造，還是在弄清楚有沒有人要？',
  'path'  => '/lens/atomic-time',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《原子時間》',
  'heading'   => '你最自律的那一小時，可能正餵著一個沒人要的東西',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/atomic-time.html',
  'book'      => ['name' => '原子時間', 'author' => '柳韓彬'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你按下明天那個碼錶之前——那件事，有人要嗎？',
    'body'    => '別急著用下一段原子時間再打造一版。先空出十分鐘，去問一個真的可能掏錢的人：你上一次為這件事頭痛，是什麼時候？問得出答案，這一小時才算沒白守。',
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
    ['name' => '原子時間',  'path' => '/lens/atomic-time'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
