<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一雙樸素的帆布鞋，憑什麼有人搶著買：用痛點之尺重讀《TOMS Shoes：穿一雙鞋，改變世界》｜痛點 P.A.I.N.',
  'desc'  => '麥考斯基的 TOMS 用「賣一捐一」紅遍全球，書裡讓你滿腦子都是打赤腳的孩子。用痛點的眼光補一刀：真正掏錢養活 TOMS 的，從來是另一群人——想當好人卻沒空、沒方法的買家。你想做的好事，找得到那個會在收銀台前掏錢的人嗎？',
  'path'  => '/lens/start-something-that-matters',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《TOMS Shoes：穿一雙鞋，改變世界》',
  'heading'   => '一雙樸素的帆布鞋，憑什麼有人搶著買',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/start-something-that-matters.html',
  'book'      => ['name' => 'TOMS Shoes：穿一雙鞋，改變世界', 'author' => 'Blake Mycoskie 布雷克・麥考斯基'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你想做的那件好事，找得到會掏錢的那個人嗎？',
    'body'    => 'TOMS 賭中了「想當好人卻沒方法」的買家真的存在；換成你的善念，那群人在不在？先用痛點的眼光，五分鐘體檢一個你心裡的點子，看看真正會付錢的人找不找得到。',
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
    ['name' => 'TOMS Shoes：穿一雙鞋，改變世界', 'path' => '/lens/start-something-that-matters'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
