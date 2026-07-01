<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '英雄旅程，是回到家才畫得出來的地圖：用痛點之尺重讀《千面英雄》｜痛點 P.A.I.N.',
  'desc'  => '坎伯《千面英雄》把全世界的神話拆成同一條英雄旅程，被創業者奉為劇本。用痛點的眼光重讀：那張圖是活著回來的人才畫得出來的地圖——每一步看似註定，只因你聽故事時結局早已發生。可你要出發時，結局還沒。',
  'path'  => '/lens/the-hero-with-a-thousand-faces',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《千面英雄》',
  'heading'   => '英雄旅程，是回到家才畫得出來的地圖',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-hero-with-a-thousand-faces.html',
  'book'      => ['name' => '千面英雄', 'author' => 'Joseph Campbell（喬瑟夫・坎伯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '出發之前，先去終點站數一數人',
    'body'    => '坎伯教你認出那條英雄旅程；痛點這把尺想先陪你走到你想像中的終點，看看月台上，到底站著幾個真的在等你把東西帶回去的人。',
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
    ['name' => '千面英雄',       'path' => '/lens/the-hero-with-a-thousand-faces'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
