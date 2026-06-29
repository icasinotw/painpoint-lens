<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子，值不值得巴菲特買下來｜痛點 P.A.I.N.',
  'desc'  => '巴菲特決定買一家公司前，先問這門生意靠什麼一直賺、有沒有護城河、價格夠不夠便宜，而不是猜它會不會漲。用痛點的眼光重讀《巴菲特的勝券在握之道》：你那個創業點子也是一門生意，值不值得你自己買下來？',
  'path'  => '/lens/the-warren-buffett-way',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《巴菲特的勝券在握之道》',
  'heading'   => '你那個點子，值不值得巴菲特買下來',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-warren-buffett-way.html',
  'book'      => ['name' => '巴菲特的勝券在握之道（The Warren Buffett Way）', 'author' => 'Robert Hagstrom 羅伯特・海格斯壯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '用估一門生意的方式，估你自己的點子',
    'body'    => '巴菲特買公司前，會先問它靠什麼一直賺、有沒有護城河、價錢夠不夠便宜。你那個點子也是一門生意——趁還沒重壓下去，先誠實問自己一句：真的有人在為這件事痛、肯付錢嗎？',
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
    ['name' => '巴菲特的勝券在握之道', 'path' => '/lens/the-warren-buffett-way'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
