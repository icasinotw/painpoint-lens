<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《誰會說故事，誰就是贏家》｜痛點 P.A.I.N.',
  'desc'  => '《誰會說故事，誰就是贏家》把商業故事拆成四種，最動人的那一種其實說給你自己聽。用痛點的眼光重讀：創業故事練得越動人，越證明你信、卻證明不了有人要買——這篇教你把故事裡的「所以一定有人要」圈出來，逐句拿去驗。',
  'path'  => '/lens/stories-that-stick',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《誰會說故事，誰就是贏家》',
  'heading'   => '四種故事裡，最危險的是你的創業故事',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/stories-that-stick.html',
  'book'      => ['name' => '誰會說故事，誰就是贏家（Stories That Stick）', 'author' => 'Kindra Hall 金卓拉・霍爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最會講的那個故事，驗過貨嗎',
    'body'    => '把你最常講的創業故事錄下來，圈出每一句「所以一定有人要」，逐句問自己：手上有幾個真的掏過錢的人撐得住它？撐不住的，先別急著再講一遍，先去驗。',
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
    ['name' => '誰會說故事，誰就是贏家', 'path' => '/lens/stories-that-stick'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
