<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '韓第喊你趁高點起跳，落點沒人替你看一眼：用痛點之尺重讀《第二曲線》｜痛點 P.A.I.N.',
  'desc'  => '韓第《第二曲線》最準的一手是時機：趁第一條曲線還在高點、還沒到頂就起跳。但他只回答了「何時跳」，沒回答「往哪跳」。用痛點的眼光重讀：第二曲線本身就是一個還沒驗證的賭注，最危險的不是跳太晚，是趁日子還行、縱身跳向一個你光在腦中就覺得「一定有搞頭」、外面卻沒人要的漂亮方向。',
  'path'  => '/lens/the-second-curve',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《第二曲線》',
  'heading'   => '韓第喊你趁高點起跳，落點沒人替你看一眼',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-second-curve.html',
  'book'      => ['name' => '第二曲線：跨越「S型曲線」的二次飛躍', 'author' => 'Charles Handy 查爾斯・韓第'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你縱身跳上第二條曲線之前',
    'body'    => '《第二曲線》教你趁高點就起跳、別等到來不及；《痛點》這把尺，幫你確認落點那頭真的有人在等——不是你一個人對著腦中那個美好未來練功。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '第二曲線',  'path' => '/lens/the-second-curve'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
