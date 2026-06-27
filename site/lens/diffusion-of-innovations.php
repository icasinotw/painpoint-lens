<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《創新的擴散》：你把擴散曲線描到底，最左邊那個人還沒見過｜痛點 P.A.I.N.',
  'desc'  => '《創新的擴散》是「東西怎麼傳開」的源頭，早期採用者、跨越鴻溝那套詞都從它的擴散曲線長出來。用痛點之尺重讀：那條曲線是倒著畫的，每一條都先有最左邊一小撮真的想要的人；抱著點子的你卻從曲線中段往後描，把大眾上車都想好了，連第一個真人都還沒找到。',
  'path'  => '/lens/diffusion-of-innovations',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創新的擴散》',
  'heading'   => '你把那條漂亮的擴散曲線描到了底，最左邊那個人，你還沒見過',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/diffusion-of-innovations.html',
  'book'      => ['name' => '創新的擴散：為什麼有些好觀念、好產品會一炮而紅，有些卻流行不起來？（Diffusion of Innovations）', 'author' => 'Everett Rogers 埃弗雷特・羅吉斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那條擴散曲線，最左邊那一格有人站著嗎？',
    'body'    => '花五分鐘，看看你那個點子最沒被驗過的，是不是「有沒有第一個真人要」這一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '創新的擴散',   'path' => '/lens/diffusion-of-innovations'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
