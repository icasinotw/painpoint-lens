<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最先被騙的那個故事，是你講給自己聽的｜痛點 P.A.I.N.',
  'desc'  => '哥德夏在《故事如何改變你的大腦?》裡證明，故事是人類最強的控制術：你一沉進去，腦裡那個查證、唱反調的守衛就自動靜音。用痛點的眼光重讀——創業者最先被接管的，是他講給自己聽的那個創業故事：一個沒有壞人、麻煩全被解決的漂亮劇本，正是你的大腦最愛、也最不設防的版本。',
  'path'  => '/lens/the-story-paradox',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《故事如何改變你的大腦?》',
  'heading'   => '你最先被騙的那個故事，是你講給自己聽的',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/the-story-paradox.html',
  'book'      => ['name' => '故事如何改變你的大腦', 'author' => 'Jonathan Gottschall 強納森・哥德夏'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你講給自己聽的那個故事，驗過了嗎',
    'body'    => '哥德夏證明你的判斷會被一個好故事接管；你那個還沒問過半個活人的點子，正是你最深信、也最沒驗過的一個故事。',
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
    ['name' => '故事如何改變你的大腦', 'path' => '/lens/the-story-paradox'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
