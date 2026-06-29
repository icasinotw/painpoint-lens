<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你拿自己當人性樣本，偏偏你最不準：用痛點之尺重讀《西方文化的特立獨行如何形成繁榮世界》｜痛點 P.A.I.N.',
  'desc'  => '亨里奇在《西方文化的特立獨行如何形成繁榮世界》證明：你我這種現代人（他縮寫成 WEIRD，剛好是英文的「怪」），是地球上心理最不具代表性的一群。用痛點的眼光重讀：你心裡那句「大家一定都……」，其實只訪問了一個全世界最不準的樣本——你自己。',
  'path'  => '/lens/the-weirdest-people-in-the-world',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《西方文化的特立獨行如何形成繁榮世界》',
  'heading'   => '你拿自己當人性樣本，偏偏你最不準',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-weirdest-people-in-the-world.html',
  'book'      => ['name' => '西方文化的特立獨行如何形成繁榮世界', 'author' => 'Joseph Henrich（約瑟夫・亨里奇）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最篤定的那句「大家一定都……」，到底訪問過幾個人？',
    'body'    => '挑一個你最懶得驗證的假設，把那個「大家」的名單列出來——要是五張臉有四張都跟你很像，你問到的其實只是自己的影子。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                            'path' => '/'],
    ['name' => '痛點之尺',                         'path' => '/lens'],
    ['name' => '西方文化的特立獨行如何形成繁榮世界', 'path' => '/lens/the-weirdest-people-in-the-world'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
