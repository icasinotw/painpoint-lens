<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你開了一百扇門,每個房間都漂亮,就是沒人住:用痛點之尺重讀《創意從何而來》｜痛點 P.A.I.N.',
  'desc'  => '《創意從何而來》是史蒂芬・強森對「好點子打哪來」最紮實的一張地圖——相鄰可能、緩慢的預感、液態網絡。用痛點的眼光重讀:這張地圖標得出哪扇門推得開,卻從不告訴你哪個房間裡有人在等;你忙著生點子的時候,有沒有回頭確認過,外面真有人要?',
  'path'  => '/lens/where-good-ideas-come-from',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《創意從何而來》',
  'heading'   => '你開了一百扇門,每個房間都漂亮,就是沒人住',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/where-good-ideas-come-from.html',
  'book'      => ['name' => '創意從何而來(Where Good Ideas Come From: The Natural History of Innovation)', 'author' => '史蒂芬・強森 Steven Johnson'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '學會了怎麼生點子之後,順手敲一敲門',
    'body'    => '強森把「點子怎麼長出來」說到了極致。同一份用心,也能挪去問你手上那個點子:推開它之前,有沒有先確認過,房間裡真有人在等。',
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
    ['name' => '創意從何而來',   'path' => '/lens/where-good-ideas-come-from'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
