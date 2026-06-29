<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你正在替一個還沒見過的市場做主｜痛點 P.A.I.N.',
  'desc'  => '海耶克《到奴役之路》最狠的一句話，是沒有任何一張辦公桌裝得下一整個社會的知識。用痛點之尺重讀：你關在房間裡寫出來的那份完美計畫書，就是一份個人版的中央計畫——替一群還沒見過面的客戶，提前決定好了他們要什麼；那個關鍵的知識不在你的試算表裡，得去外面那些人身上才找得到。',
  'path'  => '/lens/the-road-to-serfdom',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《到奴役之路》',
  'heading'   => '你正在替一個還沒見過的市場做主',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-road-to-serfdom.html',
  'book'      => ['name' => '到奴役之路', 'author' => 'Friedrich Hayek 弗里德里希・海耶克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你計畫書裡押得最重的那一格，問過真人了嗎',
    'body'    => '海耶克讓你看懂，再聰明的規劃者也湊不齊那些散在別人身上的知識；你那份漂亮的計畫書，同樣有一格關鍵假設只長在客戶身上。趁還沒砸錢、沒寫半行程式，先把那條最重的假設單獨拎出來，去找一個真有這個痛的人，看他上次為它實際花了多少時間和錢。',
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
    ['name' => '到奴役之路', 'path' => '/lens/the-road-to-serfdom'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
