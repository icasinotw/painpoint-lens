<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '連「只是看看」都能成交，這身功夫別拿去驗點子：用痛點之尺重讀《銷售洗腦》｜痛點 P.A.I.N.',
  'desc'  => '《銷售洗腦》教你把一進門就說「不用，我只是看看」的人變成買家，連本來沒打算買的也能溶掉抗拒。用痛點的眼光重讀：這身能把「不要」洗成「好」的功夫，搬去驗自己的點子最危險——你會把「其實沒人要」洗成一次點頭。',
  'path'  => '/lens/no-thanks-im-just-looking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《銷售洗腦》',
  'heading'   => '連「只是看看」都能成交，這身功夫別拿去驗點子',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/no-thanks-im-just-looking.html',
  'book'      => ['name' => '銷售洗腦：「不」就是這麼一回事，讓顧客不掏錢都不行的說服術', 'author' => 'Harry J. Friedman 哈利・佛里曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你談成的那個「好」，撤掉推力還在不在？',
    'body'    => '《銷售洗腦》教你把猶豫的人成交；驗點子時，你更需要的是分清那句「我會買」是自己走過來的，還是被你溶出來的。花五分鐘，把你手上一個點子的需求，誠實地照一次。',
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
    ['name' => '銷售洗腦',  'path' => '/lens/no-thanks-im-just-looking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
