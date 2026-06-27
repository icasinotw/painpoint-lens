<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「先做了再說」是給已經知道有人要的人：用痛點之尺拆《追求卓越》｜痛點 P.A.I.N.',
  'desc'  => '《追求卓越》四十年後最多人記得的一句是「崇尚行動」——別想太多，先做了再說。但「先射，再瞄」藏了一個前提：你已經知道靶在哪。對還沒驗過有沒有人要的你，這股行動力只會用最快的速度，把錢和時間倒進一個沒人要的方向。用痛點的眼光重讀：把想衝去「做」的勁，先掉頭衝去「問」。',
  'path'  => '/lens/in-search-of-excellence',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《追求卓越》',
  'heading'   => '「先做了再說」，是給已經知道有人要的人',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/in-search-of-excellence.html',
  'book'      => ['name' => '追求卓越（In Search of Excellence）', 'author' => 'Tom Peters 畢德士、Robert Waterman 華特曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別急著動手做，先確認有沒有人要',
    'body'    => '《追求卓越》教你崇尚行動；《痛點》這把尺提醒你——動手做之前，先用一種更便宜的行動確認方向：外面到底有沒有人在痛。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '追求卓越',      'path' => '/lens/in-search-of-excellence'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
