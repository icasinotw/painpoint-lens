<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《模仿欲望》｜痛點 P.A.I.N.',
  'desc'  => '路克・伯吉斯用吉拉爾的「模仿欲望」拆穿一件難堪的事：你想要什麼，多半是看著別人想要才跟著想要的。用痛點的眼光重讀：動手做之前該驗的不只市場，還有最早讓你動心的那股渴望，到底是不是別人傳染給你的。',
  'path'  => '/lens/wanting',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《模仿欲望》',
  'heading'   => '你最想做的那個點子，可能是別人傳染給你的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/wanting.html',
  'book'      => ['name' => '模仿欲望：刻意忽略的人性弱點，影響人類所有行為（Wanting: The Power of Mimetic Desire in Everyday Life）', 'author' => '路克・伯吉斯（Luke Burgis）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最想做的那件事，是什麼時候冒出來的',
    'body'    => '伯吉斯讓你看見，欲望常是從身邊一個你沒承認的「模範」那裡抄來的。動手前，先把那股「我好想做」倒帶回沒人看的時候——它在流行起來之前，有沒有跟你要過任何代價。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '模仿欲望',    'path' => '/lens/wanting'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
