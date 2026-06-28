<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把改變的本事，全瞄準了一個沒人等你的終點：用痛點之尺重讀《零阻力改變》｜痛點 P.A.I.N.',
  'desc'  => '米爾克曼用行為科學告訴你：改不動多半不是意志力不夠，是沒先認出擋路的是哪道阻力、再對症下藥。用痛點的眼光重讀——你早把她那套搬阻力的本事練到滾瓜爛熟，卻全瞄準「把產品做出來」，從沒拿去對準那件你一直繞開的事：問一個陌生人肯不肯為它掏錢。',
  'path'  => '/lens/how-to-change',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《零阻力改變》',
  'heading'   => '你把改變的本事，全瞄準了一個沒人等你的終點',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/how-to-change.html',
  'book'      => ['name' => '零阻力改變(How to Change)', 'author' => 'Katy Milkman 凱蒂・米爾克曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，卻一直瞄準錯的那件事在用力？',
    'body'    => '《零阻力改變》教你把難事撐到底，卻不替你挑該先改的是哪一件；先確認你拚命要去的那一頭真的有人在等，再決定要不要把整身力氣往那裡倒。',
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
    ['name' => '零阻力改變',   'path' => '/lens/how-to-change'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
