<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '林區其實是個痛點獵人：用痛點之尺拆《彼得林區選股戰略》｜痛點 P.A.I.N.',
  'desc'  => '彼得林區教散戶在生活裡找到「一直有人買」的好公司——這跟《痛點》要你下場確認「真的有人在痛、在付錢」是同一個動作。用痛點之尺重讀這本選股經典：別愛上一個聽起來會賺的點子，先找到正在掏錢的人。',
  'path'  => '/lens/one-up-on-wall-street',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解投資經典',
  'heading'   => '林區其實是個痛點獵人',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/one-up-on-wall-street.html',
  'book'      => ['name' => '彼得林區選股戰略（One Up on Wall Street）', 'author' => 'Peter Lynch 彼得・林區'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別愛上一個「聽起來會賺」的點子——先找到正在掏錢的人',
    'body'    => '林區靠「找到一直有人買的好公司」勝過華爾街；《痛點》這把尺，幫你把同一個動作用在你的點子上——先確認真的有人在痛、在付錢，再投時間和錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '彼得林區選股戰略',   'path' => '/lens/one-up-on-wall-street'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
