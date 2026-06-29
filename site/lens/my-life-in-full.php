<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '『擁有一切』是漂亮劇本，她算過真正的代價：用痛點之尺重讀《完整的力量》｜痛點 P.A.I.N.',
  'desc'  => '百事可樂前執行長盧英德的回憶錄《完整的力量》，沒寫成一路高歌的成功學，而是誠實攤開成功背後的隱形帳單。用痛點的眼光重讀：「擁有一切」是一齣漂亮劇本，先確認有人真的在痛、把代價算清楚，才是她對自己的人生、也對一家大公司，做的同一個動作。',
  'path'  => '/lens/my-life-in-full',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《完整的力量》',
  'heading'   => '『擁有一切』是漂亮劇本，她算過真正的代價',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/my-life-in-full.html',
  'book'      => ['name' => '完整的力量', 'author' => '盧英德 Indra Nooyi'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在信的那個成功故事，帳單翻過來看過嗎？',
    'body'    => '別人端出來的風光，多半藏著一整套你看不見的支援。下次拿自己去比之前，先把那張隱形帳單補齊——這正是盧英德整本書在練的功課。',
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
    ['name' => '完整的力量', 'path' => '/lens/my-life-in-full'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
