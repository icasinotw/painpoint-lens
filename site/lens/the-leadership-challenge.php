<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把全船的人都說服了，沒人回頭看岸上有沒有人：用痛點之尺重讀《模範領導》｜痛點 P.A.I.N.',
  'desc'  => '《模範領導》用三十年數據教你喚起共同願景、把一群人說進一個未來——而這正是創業者天生太會、也最危險的一項。用痛點之尺重讀：被你說服的人都在船上，決定航程值不值得的，是岸上還沒掏錢的陌生人。',
  'path'  => '/lens/the-leadership-challenge',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《模範領導》',
  'heading'   => '你把全船的人都說服了，沒人回頭看岸上有沒有人',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-leadership-challenge.html',
  'book'      => ['name' => '模範領導', 'author' => 'James M. Kouzes、Barry Z. Posner'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那座港口，岸上到底有沒有人？',
    'body'    => '《模範領導》教你把一群人說進一個願景；《痛點》這把尺，幫你先確認岸上真的有人在等。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '模範領導',  'path' => '/lens/the-leadership-challenge'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
