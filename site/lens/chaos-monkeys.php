<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '矽谷的浪漫故事底下，是一張你沒看到的價目表：用痛點之尺拆《矽谷潑猴》｜痛點 P.A.I.N.',
  'desc'  => '《矽谷潑猴》是廣告工程師馬丁尼茲的矽谷回憶錄——從高盛定價、YC 育成到親手打造臉書的廣告變現引擎，一路髒話連篇地拆穿這門生意。用痛點的眼光重讀：矽谷最擅長的是把攤子的燈打亮，這本書要你繞到後面看錢箱——用你東西的人，跟真正付錢的人，往往不是同一群。',
  'path'  => '/lens/chaos-monkeys',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《矽谷潑猴》',
  'heading'   => '矽谷的浪漫故事底下，是一張你沒看到的價目表',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/chaos-monkeys.html',
  'book'      => ['name' => '矽谷潑猴（Chaos Monkeys）', 'author' => 'Antonio García Martínez 安東尼歐・賈西亞・馬丁尼茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在興奮的那件事，錢箱是滿的還是空的',
    'body'    => '挑一件你現在正投入、或正躍躍欲試的事，把讓你興奮的形容詞全拿掉，逼自己寫一句大白話：這件事，是哪一個具體的人，願意為了哪一個具體的痛，持續掏出錢或時間？寫不出來，你很可能正對著一個燈很亮、故事很動人、錢箱卻是空的攤子入神。',
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
    ['name' => '矽谷潑猴',  'path' => '/lens/chaos-monkeys'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
