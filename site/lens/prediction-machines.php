<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '機器負責預測，你負責判斷，最大那筆判斷你交給了一句「一定有人要」：用痛點之尺重讀《AI經濟的策略思維》｜痛點 P.A.I.N.',
  'desc'  => '《AI經濟的策略思維》三位經濟學家把 AI 講成一件事：預測變便宜，判斷變稀罕。用痛點的眼光重讀——抱著點子的你最缺的正是那筆判斷：機器替你算得出銷量，卻判斷不了這東西到底有沒有人肯掏錢，而那一格押著你接下來一兩年。',
  'path'  => '/lens/prediction-machines',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《AI經濟的策略思維》',
  'heading'   => '機器負責預測，你負責判斷，最大那筆判斷你交給了一句「一定有人要」',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/prediction-machines.html',
  'book'      => ['name' => 'AI經濟的策略思維：善用人工智慧的預測威力，做出最佳商業決策', 'author' => 'Ajay Agrawal（阿杰・艾格拉瓦）、Joshua Gans、Avi Goldfarb'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，最該你判斷的那一格，補上了嗎？',
    'body'    => '《AI經濟的策略思維》讓你看懂 AI 怎麼把預測變便宜；《痛點》這把尺，幫你補上機器永遠替你判斷不了的那一格——外面到底有沒有人肯為它掏錢。現在就免費體檢一個點子，五分鐘照出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => 'AI經濟的策略思維',  'path' => '/lens/prediction-machines'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
