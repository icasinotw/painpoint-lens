<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '造得出來，不代表你關得掉：用痛點之尺重讀《控制邊緣》｜痛點 P.A.I.N.',
  'desc'  => '蘇萊曼《控制邊緣》警告：一項夠強的技術一旦放出去，就再也關不掉。用痛點的眼光重讀——你桌上那個產品就是你的小浪，悲觀規避會讓你把唱衰的人請出門、把煞車也一起拆掉。趁代價還只是一頁簡報，先驗你最不想聽的那句話。',
  'path'  => '/lens/the-coming-wave',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《控制邊緣》',
  'heading'   => '造得出來，不代表你關得掉',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-coming-wave.html',
  'book'      => ['name' => '控制邊緣：迎接 AI 與生物科技的浪潮，人類如何保住掌控權', 'author' => 'Mustafa Suleyman 穆斯塔法・蘇萊曼、Michael Bhaskar 麥可・巴斯卡'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那件事，現在還關得掉嗎？',
    'body'    => '《控制邊緣》提醒你：一樣東西一旦全速跑起來，你就很難再喊停。趁代價還只是改一頁簡報，先把「萬一錯了我停不停得下來」這一格，老實算清楚。',
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
    ['name' => '控制邊緣',  'path' => '/lens/the-coming-wave'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
