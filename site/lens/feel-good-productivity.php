<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '越撐越累的那件事，可能連你都不想要｜痛點 P.A.I.N.',
  'desc'  => '阿布達爾在《高效原力》裡把最傷的一種累叫「錯位」：你不是做太多，是把力氣倒進一件連你自己都不太在乎的事裡。用痛點的眼光重讀——好情緒不只是燃料，還是一具偵測器；力氣往哪流、在哪卡住，早就替你對這件事投完了票，那正是你對自己動機的一次需求驗證。',
  'path'  => '/lens/feel-good-productivity',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《高效原力》',
  'heading'   => '越撐越累的那件事，可能連你都不想要',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/feel-good-productivity.html',
  'book'      => ['name' => '高效原力', 'author' => 'Ali Abdaal 阿里・阿布達爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在硬撐的那件事，驗過了嗎',
    'body'    => '阿布達爾要你把力氣的流向當偵測器讀；你那個還沒問過半個活人的點子，正是最該先花小力氣試一下、看它回不回你電的地方。',
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
    ['name' => '高效原力', 'path' => '/lens/feel-good-productivity'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
