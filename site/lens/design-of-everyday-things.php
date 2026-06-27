<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '諾曼門可以開得很順，房間裡卻一個人也沒有：用痛點之尺重讀《設計的心理學》｜痛點 P.A.I.N.',
  'desc'  => '《設計的心理學》把「你太笨」從使用者頭上拿掉、怪回設計。但同一句「別怪使用者」，創業者常常用反——東西沒人買就怪市場。諾曼的尺量得到順不順手，量不到門後有沒有人要進來。',
  'path'  => '/lens/design-of-everyday-things',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《設計的心理學》',
  'heading'   => '諾曼門可以開得很順，房間裡卻一個人也沒有',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/design-of-everyday-things.html',
  'book'      => ['name' => '設計的心理學：人性化的產品設計如何改變世界', 'author' => '唐納・諾曼（Donald A. Norman）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那扇門後面，到底有沒有人想進來？',
    'body'    => '《設計的心理學》教你把門做得又順又好開；《痛點》這把尺，幫你先確認門外真的有人在等。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '設計的心理學', 'path' => '/lens/design-of-everyday-things'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
