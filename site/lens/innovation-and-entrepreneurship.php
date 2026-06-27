<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他教你看見機會，沒教你先確認有人要：用痛點之尺重讀《創新與創業精神》｜痛點 P.A.I.N.',
  'desc'  => '杜拉克《創新與創業精神》把「去哪裡找機會」講得最有系統——七個來源、四種策略。但他在最關鍵的一道工序前收手：確認你看到的機會，是真的有人在痛、會掏錢，他甚至不信市場調查。用 P.A.I.N. 四問補上他拒絕給的那一刀。',
  'path'  => '/lens/innovation-and-entrepreneurship',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創新與創業精神》',
  'heading'   => '他教你看見機會，沒教你先確認有人要',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/innovation-and-entrepreneurship.html',
  'book'      => ['name' => '創新與創業精神：杜拉克談創新實務與策略', 'author' => 'Peter F. Drucker 彼得．杜拉克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你看到的那個機會，底下真的站著人嗎？',
    'body'    => '杜拉克教你去哪裡找機會；《痛點》這把尺，幫你先確認有沒有人會掏錢。現在就免費體檢一個點子，五分鐘找出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '創新與創業精神',   'path' => '/lens/innovation-and-entrepreneurship'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
