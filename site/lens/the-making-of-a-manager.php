<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '新手主管會崩潰，多半是把痛找錯了：用痛點之尺重讀《當上主管後，難道只能默默崩潰？》｜痛點 P.A.I.N.',
  'desc'  => '卓茱莉把「主管」這份工作重新定義成：讓一群人一起做出更好的結果。用痛點的眼光重讀：新手主管半夜的崩潰，多半不是事情太多，是把力氣全倒進「證明自己夠格」，沒去解團隊真正在流血的那個痛。先替團隊做一次需求驗證，再決定力氣往哪倒。',
  'path'  => '/lens/the-making-of-a-manager',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《當上主管後，難道只能默默崩潰？》',
  'heading'   => '新手主管會崩潰，多半是把痛找錯了',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-making-of-a-manager.html',
  'book'      => ['name' => '當上主管後，難道只能默默崩潰？', 'author' => 'Julie Zhuo 卓茱莉'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最拚的那件事，解的是團隊的痛，還是自己的不安？',
    'body'    => '挑團隊裡一個人，問一句你以前會跳過的話：你現在手上最卡、最想解決掉的是哪一件事？然後閉嘴聽完。問完三五個，重複出現的那件事，多半就是你一直忙著、卻沒看見的痛。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                              'path' => '/'],
    ['name' => '痛點之尺',                           'path' => '/lens'],
    ['name' => '當上主管後，難道只能默默崩潰？',         'path' => '/lens/the-making-of-a-manager'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
