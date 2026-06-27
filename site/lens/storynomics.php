<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把點子拍成了一部沒有反派的電影｜痛點 P.A.I.N.',
  'desc'  => '麥基在《故事行銷聖經》裡說，故事的心臟是「事與願違」那道落差——主角伸手去拿他要的，世界偏不照他想的回應。用痛點之尺重讀：你心裡那部創業故事一路太順，把唯一該演反派的市場寫出了局；而市場遞來的那道落差（沒人買），正是你的故事該真正開始的地方。',
  'path'  => '/lens/storynomics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《故事行銷聖經》',
  'heading'   => '你把點子拍成了一部沒有反派的電影',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/storynomics.html',
  'book'      => ['name' => '故事行銷聖經', 'author' => 'Robert McKee 羅伯特・麥基、Thomas Gerace'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那部創業好戲裡，反派的位置是不是空的？',
    'body'    => '麥基說沒有對抗就沒有故事；《痛點》這把尺，逼你把那個被你寫出局的反派（市場）請回劇本——去拿一個你沒辦法替自己改寫結局的回應：一個陌生人主動掏出來的真錢。現在就免費體檢一個點子，五分鐘看出最空的那一格；或翻翻《痛點》電子書。',
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
    ['name' => '故事行銷聖經', 'path' => '/lens/storynomics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
