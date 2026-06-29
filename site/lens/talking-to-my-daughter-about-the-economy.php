<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你替點子記的那本帳，市場一筆都不認｜痛點 P.A.I.N.',
  'desc'  => '瓦魯法克斯把整部資本主義史寫成給女兒的信，只為講清一件事：一樣東西「對你的意義」和「換得到的價錢」，是用兩把不同的尺量的。用痛點的眼光重讀：你替點子算的全是它對你的價值，市場那本帳卻只記一件事——有沒有陌生人肯把錢掏出來。',
  'path'  => '/lens/talking-to-my-daughter-about-the-economy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《爸爸寄來的經濟學情書》',
  'heading'   => '你替點子記的那本帳，市場一筆都不認',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/talking-to-my-daughter-about-the-economy.html',
  'book'      => ['name' => '爸爸寄來的經濟學情書（Talking to My Daughter About the Economy）', 'author' => 'Yanis Varoufakis 亞尼斯・瓦魯法克斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你替那個點子估的價，市場那邊認得幾筆？',
    'body'    => '在你再往自己那本帳上多添一筆之前，先把點子擺到一個不認識你的陌生人面前，看他肯不肯把錢放下——那才是市場帳上的第一個真數字。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                       'path' => '/'],
    ['name' => '痛點之尺',                    'path' => '/lens'],
    ['name' => '爸爸寄來的經濟學情書',          'path' => '/lens/talking-to-my-daughter-about-the-economy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
