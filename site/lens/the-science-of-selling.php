<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你成交的那一單，最會騙你：用痛點之尺重讀《銷售的科學》｜痛點 P.A.I.N.',
  'desc'  => '《銷售的科學》把成交拆成顧客大腦會問的六個為什麼，第一個就是「我為什麼要改變」。用痛點的眼光重讀：這六題全從「已經有一個人坐在你對面」算起；一個被你說到點頭的單子，最會騙你以為「有人買」等於「有人要」。你那個點子最該先敲的，是這六題之前的第零題。',
  'path'  => '/lens/the-science-of-selling',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《銷售的科學》',
  'heading'   => '你成交的那一單，最會騙你',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-science-of-selling.html',
  'book'      => ['name' => '銷售的科學', 'author' => 'David Hoffeld（大衛・霍菲爾德）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '說到他點頭之前，先確認門外有人',
    'body'    => '《銷售的科學》教你把顧客大腦的六個為什麼一格一格答好；痛點這把尺，幫你先答六題之前的第零題——願意自己走過來、肯為這個痛掏錢的人，到底有沒有、夠不夠。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '銷售的科學',  'path' => '/lens/the-science-of-selling'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
