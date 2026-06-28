<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '漂亮的故事人人都信，那台機器沒人驗過：用痛點之尺重讀《惡血》｜痛點 P.A.I.N.',
  'desc'  => '《惡血》揭開 Theranos 九十億美元的醫療騙局：一滴血驗百項的承諾人人都信，那台機器卻從沒驗準過。用痛點的眼光重讀——痛點夠真、劇本夠美，反而讓所有人忘了回頭驗那台機器；你手上的點子，會不會也犯同一個錯。',
  'path'  => '/lens/bad-blood',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《惡血》',
  'heading'   => '漂亮的故事人人都信，那台機器沒人驗過',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/bad-blood.html',
  'book'      => ['name' => '惡血：矽谷獨角獸的醫療騙局！', 'author' => '約翰・凱瑞魯（John Carreyrou）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正好有個讓你睡不著的點子？',
    'body'    => '《惡血》拆的是別人的崩塌，但那條紅字也可能在你身上。趁你還沒押下重注，先花五分鐘，把你最不敢驗的那個假設攤開來看清楚。',
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
    ['name' => '惡血',     'path' => '/lens/bad-blood'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
