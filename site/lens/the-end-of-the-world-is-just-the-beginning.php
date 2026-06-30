<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '做需求驗證之前，先驗你站的這塊地：用痛點之尺重讀《世界不再是平的》｜痛點 P.A.I.N.',
  'desc'  => '《世界不再是平的》拆掉一個你以為是地心引力的東西——過去七十年那個又便宜又方便的全球供應網，其實是別人撐出來的。用痛點的眼光重讀：你忙著驗有沒有人要買，卻把「做得出來、運得到、市場會長大」這些前提，當成了不用驗的背景。',
  'path'  => '/lens/the-end-of-the-world-is-just-the-beginning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《世界不再是平的》',
  'heading'   => '做需求驗證之前，先驗你站的這塊地',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-end-of-the-world-is-just-the-beginning.html',
  'book'      => ['name' => '世界不再是平的（The End of the World Is Just the Beginning）', 'author' => 'Peter Zeihan 彼得・澤汗'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先把你站的那塊地，驗一遍',
    'body'    => '《世界不再是平的》把你當成背景的前提一條條翻出來；痛點這把尺，逼你在「有沒有人要買」之前，先確認你做得出來、運得到、市場還在。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '世界不再是平的',   'path' => '/lens/the-end-of-the-world-is-just-the-beginning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
