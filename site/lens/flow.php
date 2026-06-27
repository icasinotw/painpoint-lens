<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '渾然忘我，是「沒人要」最好的偽裝：用痛點之尺重讀《心流》｜痛點 P.A.I.N.',
  'desc'  => '契克森米哈伊的《心流》發現，渾然忘我的最優體驗，跟你在做什麼幾乎無關——這正是它對創業者最危險的地方。用痛點之尺重讀心流：為了待在心流裡，你會挑自己最拿手的仗打，偏偏「有沒有人要」就站在你最想躲開的那一區。動手鑽進去之前，先確認外面真的有人在等。',
  'path'  => '/lens/flow',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《心流》',
  'heading'   => '渾然忘我，是「沒人要」最好的偽裝',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/flow.html',
  'book'      => ['name' => '心流：高手都在研究的最優體驗心理學', 'author' => 'Mihaly Csikszentmihalyi 米哈里・契克森米哈伊'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你準備鑽進去的那件事，外面有人在等嗎？',
    'body'    => '《心流》教你怎麼渾然忘我地把一件事做好；《痛點》這把尺，幫你先確認那件事有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '心流',      'path' => '/lens/flow'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
