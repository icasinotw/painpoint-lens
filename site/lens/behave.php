<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你收下的那句「我會用」，薩波斯基會先帶你查它從哪來：用痛點之尺重讀《行為》｜痛點 P.A.I.N.',
  'desc'  => '《行為》用一塊磚頭的篇幅證明：沒有任何行為是從它自己開始的，背後是一整條從神經到演化的因果鏈。用痛點之尺重讀薩波斯基——你收下的那句「我會用」也是一個行為，它的原因多半停在「你正站他面前」，回溯不到一個真為這痛掏過錢的人。',
  'path'  => '/lens/behave',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《行為》',
  'heading'   => '你收下的那句「我會用」，薩波斯基會先帶你查它從哪來',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/behave.html',
  'book'      => ['name' => '行為：人類最好和最糟行為背後的生物學(Behave)', 'author' => 'Robert Sapolsky 羅伯・薩波斯基'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「有人要」，回溯得到一個真人嗎？',
    'body'    => '《行為》教你把任何一句「我會用」當成行為、一路往回查原因；《痛點》這把尺，幫你查到底——回溯得到一個真為這痛掏過錢的人，它才算數。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '行為',      'path' => '/lens/behave'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
