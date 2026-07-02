<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《金融的智慧》｜痛點 P.A.I.N.',
  'desc'  => '米希爾・德賽在《金融的智慧》裡重讀「才幹的比喻」：把才幹埋進土裡、一點風險都不肯扛的僕人，一分報酬都配不到。用痛點的眼光重讀：你那個藏了很久、遲遲不敢拿出去驗的點子，就是埋在土裡的才幹——而承擔風險之前，得先確認那個痛是真的。',
  'path'  => '/lens/the-wisdom-of-finance',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《金融的智慧》',
  'heading'   => '把才幹埋進土裡的人，金融不付他半毛錢',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/the-wisdom-of-finance.html',
  'book'      => ['name' => '金融的智慧（The Wisdom of Finance）', 'author' => 'Mihir A. Desai 米希爾・德賽'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '藏著的點子，換不到半毛報酬',
    'body'    => '把一個點子想得再漂亮、藏得再好，一天不拿出去碰真實世界，它就跟那個被埋進土裡的才幹一樣，一分報酬都變不出來。願意承擔風險是入場的門票——但扛之前，先確認你要解的那個痛是真的、是有人正在痛的那一個。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '金融的智慧',       'path' => '/lens/the-wisdom-of-finance'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
