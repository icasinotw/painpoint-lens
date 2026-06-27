<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最難搞的客戶，住在你自己腦袋裡：用痛點之尺重讀《窮查理的普通常識》｜痛點 P.A.I.N.',
  'desc'  => '《窮查理的普通常識》看是投資智慧，骨子裡在教你別在自己的點子上自我欺騙。用痛點的眼光重讀蒙格的誤判心理學、反過來想、能力圈：在你驗證市場有沒有人要之前，先過你腦袋裡那個一直替點子護航的自己這一關。',
  'path'  => '/lens/poor-charlies-almanack',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《窮查理的普通常識》',
  'heading'   => '你最難搞的客戶，住在你自己腦袋裡',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/poor-charlies-almanack.html',
  'book'      => ['name' => '窮查理的普通常識：巴菲特50年智慧合夥人查理.蒙格的人生哲學', 'author' => 'Charlie Munger 查理・蒙格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在說服市場之前，先過你自己這一關',
    'body'    => '蒙格教你別被自己騙；《痛點》這把尺，幫你把「我覺得有人要」變成「我查過真的有人要」。現在就免費體檢一個點子，五分鐘逼出你最弱、最不想面對的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '窮查理的普通常識', 'path' => '/lens/poor-charlies-almanack'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
