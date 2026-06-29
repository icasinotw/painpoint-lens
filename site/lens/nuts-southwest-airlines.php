<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '西南航空的對手，是你家門口那台車：用痛點之尺重讀《讓員工瘋狂熱愛公司的祕訣》｜痛點 P.A.I.N.',
  'desc'  => '傅萊伯夫婦的《讓員工瘋狂熱愛公司的祕訣》寫盡西南航空的瘋狂文化，但撐起這一切的，是它先找到一個深到讓人寧可開車、也不買機票的真痛。用痛點之尺重讀：文化是澆上去的，那台「車」才是它真正的對手——而你手上的生意，找得到那台車嗎？',
  'path'  => '/lens/nuts-southwest-airlines',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《讓員工瘋狂熱愛公司的祕訣》',
  'heading'   => '西南航空的對手，是你家門口那台車',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/nuts-southwest-airlines.html',
  'book'      => ['name' => '讓員工瘋狂熱愛公司的祕訣', 'author' => 'Kevin Freiberg 凱文·傅萊伯、Jackie Freiberg 賈姬·傅萊伯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那門生意，找得到那台「車」嗎？',
    'body'    => '把它當一個全新的點子，回頭問最狠的那一題：你要服務的人，今天已經為了繞過這個問題花掉多少？找不到那筆代價，文化做得再好也撐不起來。',
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
    ['name' => '讓員工瘋狂熱愛公司的祕訣', 'path' => '/lens/nuts-southwest-airlines'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
