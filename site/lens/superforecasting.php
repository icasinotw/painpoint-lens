<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「總會有人要」是一個你永遠不必認錯的預測：用痛點之尺重讀《超級預測》｜痛點 P.A.I.N.',
  'desc'  => '創業從頭到尾就是一個預測：你賭外面有人要。多數人卻把它說成「市場很大、總會有人要」這種怎樣都算對、永遠不必認錯的廢話。借泰特洛克《超級預測》那群人的紀律，把樂觀改寫成一個三個月後賴不掉的數字——此刻有幾個叫得出名字的真人，真的付過錢。',
  'path'  => '/lens/superforecasting',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《超級預測》',
  'heading'   => '「總會有人要」是一個你永遠不必認錯的預測',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/superforecasting.html',
  'book'      => ['name' => '超級預測：洞悉思考的藝術與科學，在不確定的世界預見未來', 'author' => 'Philip E. Tetlock、Dan Gardner'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「總會有人要」，敢被打臉嗎？',
    'body'    => '《超級預測》教你把含糊的判斷壓成一個會結算的數字；《痛點》這把尺，幫你選對那個該結算的數字——外面到底有沒有人在為這個痛掏錢。現在就免費體檢一個點子，五分鐘照出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '超級預測',  'path' => '/lens/superforecasting'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
