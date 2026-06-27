<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把兩邊都湊上門了，第二個月只剩你一個：用痛點之尺重讀《平台經濟模式》｜痛點 P.A.I.N.',
  'desc'  => '《平台經濟模式》把平台這台機器拆得最清楚——核心互動、網路效應、雞生蛋的啟動策略。但它整套功夫都在解「怎麼讓兩邊同時到場」這個協調難題，預設需求是現成的。用痛點之尺重讀帕克等三位學者：網路效應只放大本來就有的需求，動手湊雙邊之前，先替兩邊各找出一個真的在痛的人。',
  'path'  => '/lens/platform-revolution',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《平台經濟模式》',
  'heading'   => '你把兩邊都湊上門了，第二個月只剩你一個',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/platform-revolution.html',
  'book'      => ['name' => '平台經濟模式：從啟動、獲利到成長的全方位攻略', 'author' => 'Geoffrey Parker、Marshall Van Alstyne、Sangeet Choudary'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '平台要兩邊都來，你得先確認兩邊真的都在痛',
    'body'    => '《平台經濟模式》教你把一小群人用網路效應滾成一座市集；《痛點》這把尺，幫你先確認那一小群人真的存在。現在就免費體檢一個點子，五分鐘找出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '平台經濟模式',  'path' => '/lens/platform-revolution'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
