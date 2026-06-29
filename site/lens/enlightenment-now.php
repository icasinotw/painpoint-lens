<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你以為的市場,多半是被幾個鮮明個案餵出來的:用痛點之尺重讀《再啟蒙的年代》｜痛點 P.A.I.N.',
  'desc'  => '平克《再啟蒙的年代》用七十幾張趨勢線證明世界一直在變好,你卻天天覺得它在崩壞——因為壞事是砰一聲上頭條的事件,好事是沒人報導的慢趨勢,你的腦只感覺得到事件。用痛點的眼光重讀:你判斷自己市場熱不熱,犯的是同一個錯,把幾個鮮明個案讀成一整片需求;真正的市場跟那些趨勢一樣,得自己彎下腰一個一個數出來。',
  'path'  => '/lens/enlightenment-now',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《再啟蒙的年代》',
  'heading'   => '你以為的市場,多半是被幾個鮮明個案餵出來的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/enlightenment-now.html',
  'book'      => ['name' => '再啟蒙的年代:為理性、科學、人文主義與進步辯護(Enlightenment Now)', 'author' => 'Steven Pinker 史迪芬・平克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別再用幾個個案幫市場量體溫',
    'body'    => '平克要你別憑感覺判斷世界,去把趨勢線畫出來;同一招搬到你的點子上,就是別把幾個朋友的稱讚當成一整個市場——出門找幾個正被這問題折磨的真人,數一數他們真的為它花了多少。',
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
    ['name' => '再啟蒙的年代', 'path' => '/lens/enlightenment-now'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
