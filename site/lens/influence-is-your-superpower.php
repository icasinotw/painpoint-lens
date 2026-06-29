<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '決定買不買的，是一隻懶鱷魚：用痛點之尺重讀《影響力是你的超能力》｜痛點 P.A.I.N.',
  'desc'  => '柔伊・錢斯說，真正拍板的不是對方的理性腦，是一隻又懶又怕麻煩的鱷魚。用痛點的眼光重讀《影響力是你的超能力》：對方遲遲不點頭，先別想下一句更強的說辭，去把他答應你要跨過的麻煩一格一格搬走——然後，真的開口問。',
  'path'  => '/lens/influence-is-your-superpower',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《影響力是你的超能力》',
  'heading'   => '決定買不買的，是一隻懶鱷魚',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/influence-is-your-superpower.html',
  'book'      => ['name' => '影響力是你的超能力：贏得人心、促成改變、讓好事發生的科學', 'author' => 'Zoe Chance（柔伊・錢斯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '對方遲遲不點頭，你確認過卡住他的是哪一道麻煩嗎？',
    'body'    => '先別急著想下一句更有力的說辭。把對方要答應你得跨過的每一步列出來，搬走最麻煩的那一格，再真的開口問——這才是這本書用在生意上的真正吃法。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '影響力是你的超能力', 'path' => '/lens/influence-is-your-superpower'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
