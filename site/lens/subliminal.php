<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你眼裡有塊看不見的洞，大腦天天替你補上「一定有人要」｜痛點 P.A.I.N.',
  'desc'  => '《潛意識正在控制你的行為》說你的知覺和記憶都是大腦現場補出來的，連視覺盲點都補得天衣無縫。用痛點之尺重讀：你那張「市場很大、一定有人要」的完整畫面，最關鍵的一格也是補上去的——唯一補不進去的，是一個肯掏真錢的陌生人。',
  'path'  => '/lens/subliminal',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《潛意識正在控制你的行為》',
  'heading'   => '你眼裡那塊盲點，大腦天天替你補成一片市場',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/subliminal.html',
  'book'      => ['name' => '潛意識正在控制你的行為', 'author' => 'Leonard Mlodinow 雷納・曼羅迪諾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那張「一定有人要」的畫面，有幾格是補上去的？',
    'body'    => '曼羅迪諾讓你看清大腦怎麼補完你的世界；《痛點》這把尺，幫你把點子裡補上去的那一格刮出來。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '潛意識正在控制你的行為',  'path' => '/lens/subliminal'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
