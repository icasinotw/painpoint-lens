<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那句「一定有人要」，跟專家斷定「窮人需要什麼」是同一種我覺得｜痛點 P.A.I.N.',
  'desc'  => '《窮人的經濟學》的班納吉和杜芙若，不跟人吵窮人該怎麼救，他們跑進村子一次只驗一件小事。用痛點之尺重讀：你那個點子也正靠一套沒蹲過現場的大理論在養——把「一定有人要」切成這禮拜驗得完的小問句，起身去問一個真人。',
  'path'  => '/lens/poor-economics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《窮人的經濟學》',
  'heading'   => '你那句「我覺得」，從沒蹲過一次現場',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/poor-economics.html',
  'book'      => ['name' => '窮人的經濟學', 'author' => '阿比吉特・班納吉、艾絲特・杜芙若'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正握著一個你很篤定的點子?',
    'body'    => '班納吉他們的本事，是把「一定有人要」這種大話，切成一個今天就驗得完的小問句；這個點子，現在就花五分鐘掃一遍，看你哪一軸全靠「我覺得」撐著。',
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
    ['name' => '窮人的經濟學',   'path' => '/lens/poor-economics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
