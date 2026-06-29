<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他給你兩個圈，第三個得自己畫：用痛點之尺重讀《讓天賦自由》｜痛點 P.A.I.N.',
  'desc'  => '羅賓森說，天命是你的天資和熱情交會的那個點——你擅長、又熱愛的事。用痛點的眼光重讀《讓天賦自由》：他畫了兩個圈，卻沒逼你畫第三個——這世界要不要、付不付得起。書裡每個主角都剛好三個圈都對上、還被命運多發了一張好牌；輪到你，得自己先確認那個會餓死人的第三個圈，到底在不在。',
  'path'  => '/lens/the-element',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《讓天賦自由》',
  'heading'   => '他給你兩個圈，第三個得自己畫',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-element.html',
  'book'      => ['name' => '讓天賦自由', 'author' => 'Ken Robinson（肯・羅賓森）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「天命」，外面真的有人要嗎？',
    'body'    => '把你又擅長、又熱愛的那件事拿出來，先去數一數：眼前有幾個真實的人，正靠某個版本的它把日子過下去。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '讓天賦自由',     'path' => '/lens/the-element'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
