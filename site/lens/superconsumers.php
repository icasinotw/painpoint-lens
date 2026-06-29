<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你要找的成長，就坐在那一成死忠顧客的購物車裡：用痛點之尺重讀《超級用戶時代》｜痛點 P.A.I.N.',
  'desc'  => '尹艾迪在《超級用戶時代》用一疊消費數據證明：一個品類的生意，常壓在大約一成「買到停不下來」的超級用戶身上。用痛點之尺重讀——他費一整本書定義的這群人，就是你一直在找、已經為一件事掏過錢的真人；你要的成長，藏在他們的購物車裡，而不在門外那片陌生人海。',
  'path'  => '/lens/superconsumers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《超級用戶時代》',
  'heading'   => '你要找的成長，就坐在那一成死忠顧客的購物車裡',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/superconsumers.html',
  'book'      => ['name' => '超級用戶時代（Superconsumers）', 'author' => 'Eddie Yoon 尹艾迪'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的超級用戶，就藏在你現有的客人裡',
    'body'    => '挑出花你最多錢、又最常回頭的那一個客人，把名字寫下來，約他喝杯咖啡，聽他為了這件事做過哪些「正常人不會做」的事。他的那些「不正常」，就是你下一步的需求清單。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '超級用戶時代',    'path' => '/lens/superconsumers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
