<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '壓縮交期之前，先替客人的痛按一次碼錶：用痛點之尺重讀《時基競爭》｜痛點 P.A.I.N.',
  'desc'  => '史托克與郝特《時基競爭》把「我們動作太慢」算成一個比例：東西待在你公司的時間，絕大半都在排隊空等。用痛點之尺重讀：同一支碼錶，先別急著量自己的流程，轉過來量客人的痛——他一週真的為這件事耗掉多少時間、花了多少冤枉錢？',
  'path'  => '/lens/competing-against-time',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《時基競爭》',
  'heading'   => '壓縮交期之前，先替客人的痛按一次碼錶',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/competing-against-time.html',
  'book'      => ['name' => '時基競爭', 'author' => 'George Stalk 喬治·史托克、Thomas Hout 湯瑪斯·郝特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的流程快了，客人那邊真的在痛嗎？',
    'body'    => '挑你手上一件常被嫌慢的事，量出它的總時間和真正動手的實作時間，兩個一除，那是你流程裡最該拆的隊。再把碼錶轉向一個你叫得出名字的真實客人，量他一週為你要解的痛，真的耗掉多少時間、花了多少冤枉錢。客人那支碼錶按得出聲音，你壓縮交期才有意義。',
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
    ['name' => '時基競爭',  'path' => '/lens/competing-against-time'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
