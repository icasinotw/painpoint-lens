<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '餘裕看起來像浪費，直到它救你那天：用痛點之尺重讀《後疫情效應》｜痛點 P.A.I.N.',
  'desc'  => '《後疫情效應》札卡瑞亞說這場大流行不是黑天鵝，是我們明知會來卻不準備、把每個系統都優化到沒有餘裕。用痛點的眼光重讀：你把生活調到最省最順的同時，是不是也把出事那天唯一能救你的那格餘裕，當成浪費砍掉了？',
  'path'  => '/lens/ten-lessons-for-a-post-pandemic-world',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《後疫情效應》',
  'heading'   => '餘裕看起來像浪費，直到它救你那天',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/ten-lessons-for-a-post-pandemic-world.html',
  'book'      => ['name' => '後疫情效應', 'author' => '法理德‧札卡瑞亞 Fareed Zakaria'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先看一眼你生活裡那格「最省」的安排',
    'body'    => '《後疫情效應》談的是整個社會沒留餘裕的代價；痛點這把尺，只逼你問自己那格最省的安排：萬一它明天斷了，你撐得了多久。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
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
    ['name' => '後疫情效應',  'path' => '/lens/ten-lessons-for-a-post-pandemic-world'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
