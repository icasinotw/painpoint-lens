<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => 'GROW 四步，真正能驗你點子的是那個 R｜痛點 P.A.I.N.',
  'desc'  => '惠特默的《高績效教練》把當教練收成 GROW 四步：目標、現況、選擇、意願；其中那個 R（現況），最不起眼也最多人快轉。用痛點之尺重讀：你替點子設好目標、想好做法，獨獨跳過 R——而一個點子的 R，就是那個你最怕面對的事實：到底有沒有人，正為它痛到肯掏錢。',
  'path'  => '/lens/coaching-for-performance',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《高績效教練》',
  'heading'   => 'GROW 四步，真正能驗你點子的是那個 R',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/coaching-for-performance.html',
  'book'      => ['name' => '高績效教練：有效帶人、激發潛能的教練原理與實務', 'author' => 'John Whitmore 約翰・惠特默'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，做過 R 嗎？',
    'body'    => '惠特默要部屬先誠實看清現況，再談怎麼做；同一條規矩，你那個還沒問過半個真人的點子，更該先過一次——去問一個對你沒義務的陌生人，他現在怎麼解決這件事、上次為它花了多少錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '高績效教練', 'path' => '/lens/coaching-for-performance'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
