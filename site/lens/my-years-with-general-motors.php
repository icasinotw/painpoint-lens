<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '市場換了題目，福特還在答上一題：用痛點之尺重讀《我在通用的日子》｜痛點 P.A.I.N.',
  'desc'  => '福特用 Model T 把「沒車可開」的痛解到全國都買得起，卻沒發現痛已經換了一個。史隆在《我在通用的日子》裡看穿了這件事。用痛點的眼光重讀：你解的痛會被你自己解掉，需求得一直重新驗證，別當低頭默寫去年考卷的福特。',
  'path'  => '/lens/my-years-with-general-motors',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《我在通用的日子》',
  'heading'   => '市場換了題目，福特還在答上一題',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/my-years-with-general-motors.html',
  'book'      => ['name' => '我在通用的日子：史隆回憶錄（My Years with General Motors）', 'author' => 'Alfred P. Sloan 艾爾弗雷德・史隆'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在解的痛，是哪一年的？',
    'body'    => '史隆逼通用每年回頭問一次：外面的人今年想要的，跟去年一樣嗎？你手上那個點子，也值得這樣問一次。現在就花五分鐘，免費體檢它解的痛還在不在。',
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
    ['name' => '我在通用的日子', 'path' => '/lens/my-years-with-general-motors'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
