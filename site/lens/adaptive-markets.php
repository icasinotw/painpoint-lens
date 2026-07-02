<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《適應：金融演化新思維》｜痛點 P.A.I.N.',
  'desc'  => '效率市場說市場永遠對，行為財務說市場老犯蠢，羅聞全的「適應性市場假說」說兩邊各對一半——市場是會演化的生態系。用痛點的眼光重讀《適應》：沒有一套策略附終身保固，能活到最後的，是願意常回頭量一次環境天氣的人。',
  'path'  => '/lens/adaptive-markets',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《適應：金融演化新思維》',
  'heading'   => '市場一變天，昨天的必勝法就絕種',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/adaptive-markets.html',
  'book'      => ['name' => '適應：金融演化新思維（Adaptive Markets）', 'author' => 'Andrew W. Lo 羅聞全'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '沒有一套策略附終身保固——常回頭量一次天氣',
    'body'    => '羅聞全的《適應》告訴你，再漂亮的策略都只適配某一段環境，環境變了就得跟著換；《痛點》這把尺，幫你把同一個動作用回自己手上的點子——別死守一個為上一種天氣長出來的計畫，隔一陣就回頭驗一次它還成不成立。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '適應',           'path' => '/lens/adaptive-markets'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
