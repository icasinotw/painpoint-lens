<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '在砸錢做品牌之前，先把那個痛挖到底：用痛點之尺重讀《品牌的技術和藝術》｜痛點 P.A.I.N.',
  'desc'  => '葉明桂《品牌的技術和藝術》難得地把「洞察」從一句口號，還原成一個挖得動手的步驟：看穿消費者沒說出口的那個痛。用 P.A.I.N. 補上他沒安排你做的下一格——挖到的這個痛，真的大到有人願意一掏再掏嗎？挖到痛只是起點，確認痛養得活生意，才敢開始燒錢。',
  'path'  => '/lens/the-craft-and-art-of-branding',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《品牌的技術和藝術》',
  'heading'   => '在砸錢做品牌之前，先把那個痛挖到底',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-craft-and-art-of-branding.html',
  'book'      => ['name' => '品牌的技術和藝術', 'author' => '葉明桂'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '挖到一句動人的洞察之後，先確認有人真的會為它掏錢',
    'body'    => '葉明桂教你看穿消費者沒說出口的痛；在你押一個品牌上去之前，花五分鐘體檢這個點子，看看那個痛夠不夠深、有沒有人正在為它付錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '品牌的技術和藝術',  'path' => '/lens/the-craft-and-art-of-branding'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
