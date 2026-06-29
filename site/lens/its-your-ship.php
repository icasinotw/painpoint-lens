<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他沒急著改船，先把三百個人問了一遍：用痛點之尺重讀《這是你的船》｜痛點 P.A.I.N.',
  'desc'  => '艾伯拉蕭夫接下一艘吊車尾的驅逐艦，沒急著端願景，先把全船三百多人一個一個問過一輪。用痛點的眼光重讀《這是你的船》——他做的就是需求驗證，只是把那把「先去問真正在受的人」的尺，轉過來對準你以為早就摸透的自己人。',
  'path'  => '/lens/its-your-ship',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《這是你的船》',
  'heading'   => '他沒急著改船，先把三百個人問了一遍',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/its-your-ship.html',
  'book'      => ['name' => '這是你的船', 'author' => '麥可・艾伯拉蕭夫 Michael Abrashoff'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你有多久，沒問過天天合作的人「最煩的是哪裡」？',
    'body'    => '艾伯拉蕭夫接手第一件事，是把全船三百多人一個一個問過一輪。挑一個你自認很懂的人，問他一個你以為「答案很明顯」的問題，然後把準備好的答案吞回去，聽他講完——你大概會撞見一道你腦中版本和現場版本之間、一直沒對上的縫。',
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
    ['name' => '這是你的船',  'path' => '/lens/its-your-ship'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
