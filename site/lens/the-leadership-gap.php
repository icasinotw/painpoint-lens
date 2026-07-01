<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最強的那一面，壓力一來就翻成另一個人：用痛點之尺重讀《領導者的七種原型》｜痛點 P.A.I.N.',
  'desc'  => '《領導者的七種原型》說，好領導者的每個強項，壓力一來都會翻到背面，變成一個你認不得的自己。用痛點的眼光重讀：你對自己的那句定義，你驗過嗎？還是從沒拿去對過帳。',
  'path'  => '/lens/the-leadership-gap',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《領導者的七種原型》',
  'heading'   => '你最強的那一面，壓力一來就翻成另一個人',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-leadership-gap.html',
  'book'      => ['name' => '領導者的七種原型', 'author' => 'Lolly Daskal 洛麗・達絲卡'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你對自己的那句定義，驗過嗎？',
    'body'    => '《領導者的七種原型》幫你認出壓力下會冒出來的第二張臉。想同樣誠實地把一個念頭拿去對帳，翻翻《痛點》這把尺。',
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
    ['name' => '領導者的七種原型',  'path' => '/lens/the-leadership-gap'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
