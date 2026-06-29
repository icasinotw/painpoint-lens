<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '答案先寫下來，再走出去問有沒有人要：用痛點之尺重讀《假說思考》｜痛點 P.A.I.N.',
  'desc'  => '《假說思考》要你做件反直覺的事：資料還沒蒐集齊，先把答案寫下來，再回頭驗它、修它。用痛點的眼光重讀——你對怎麼做猜了一百次，獨獨不肯把「有沒有人要」先擲成一個假說、再走出去問倒它；而那一題，資料庫裡查不到，只能拿去問真人。',
  'path'  => '/lens/hypothesis-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《假說思考》',
  'heading'   => '答案先寫下來，再走出去問有沒有人要',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/hypothesis-thinking.html',
  'book'      => ['name' => '假說思考', 'author' => '內田和成'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個還沒被問倒的點子，敢先擲成一句假說嗎？',
    'body'    => '《假說思考》教你在資訊不夠時先寫下答案；痛點之尺幫你把最該先驗的那句假說——「真的有人要嗎」——逼著問出口。花五分鐘，把你最篤定的那個點子寫成一句能被推翻的假說，看它撐不撐得住。',
    'primary' => ['url' => '/tool', 'label' => '免費把我的點子擲一次'],
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
    ['name' => '假說思考',  'path' => '/lens/hypothesis-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
