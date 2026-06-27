<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你可以擺出最強的姿勢，把一個沒人要的點子，講得連自己都信了｜痛點 P.A.I.N.',
  'desc'  => '《姿勢決定你是誰》教你用力量姿勢撐出自信，先用身體把狀態演出來。用痛點之尺重讀：這面鏡子只照得到你自己，調得動你的氣場，卻問不到門外那群人要不要你的東西——而它最該被拆穿的漂亮劇本，正是「力量姿勢」自己。',
  'path'  => '/lens/presence',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《姿勢決定你是誰》',
  'heading'   => '你可以擺出最強的姿勢，把一個沒人要的點子，講得連自己都信了',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/presence.html',
  'book'      => ['name' => '姿勢決定你是誰', 'author' => 'Amy Cuddy 艾美・柯蒂'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，是查證過的，還是擺出來的？',
    'body'    => '柯蒂教你用身體撐出自信；《痛點》這把尺，幫你看出那份自信底下，到底有沒有一個肯掏錢的陌生人。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '姿勢決定你是誰',  'path' => '/lens/presence'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
