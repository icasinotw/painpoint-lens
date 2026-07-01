<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '同一份數據，能算出你想要的任何一個答案：用痛點之尺拆《統計的藝術》｜痛點 P.A.I.N.',
  'desc'  => '史匹格哈特在《統計的藝術》裡示範同一個數字換個說法，就能讓你從嚇到手軟變成聳聳肩。用痛點的眼光重讀：真正拿數字唬你的，常常是拿自己收的數據哄自己睡著的你——先把「低於它就收手」的數字寫在翻數據之前，那份數據才第一次真的替你工作。',
  'path'  => '/lens/the-art-of-statistics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《統計的藝術》',
  'heading'   => '同一份數據，能算出你想要的任何一個答案',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-art-of-statistics.html',
  'book'      => ['name' => '統計的藝術（The Art of Statistics: Learning from Data）', 'author' => 'David Spiegelhalter 大衛・史匹格哈特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '學會拆穿數字之後，輪到你那個正躍躍欲試的點子',
    'body'    => '史匹格哈特讓你變成更難被數字唬的讀者；輪到你自己那個心癢的點子，別讓後台那行漂亮百分比替你把它演成功——先畫一條收手線，再去看數據。',
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
    ['name' => '統計的藝術',   'path' => '/lens/the-art-of-statistics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
