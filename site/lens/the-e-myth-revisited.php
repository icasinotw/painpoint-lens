<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《創業這條路》：先確認有人要，再把生意系統化｜痛點 P.A.I.N.',
  'desc'  => '葛伯的《創業這條路》點名「創業的致命假設」：會做技術活不等於會經營公司。但他這套系統論，自己踩在一個更靠前、沒檢查的假設上。用痛點之尺重讀加盟樣板與「在生意上面工作」——樣板是複製機，先確認外面有人要，再把店蓋成複製五千次的樣板。',
  'path'  => '/lens/the-e-myth-revisited',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創業這條路》',
  'heading'   => '你可以把一個沒人要的生意，複製得非常有效率',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/the-e-myth-revisited.html',
  'book'      => ['name' => '創業這條路：The E-Myth Revisited', 'author' => 'Michael E. Gerber 麥克・葛伯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那門生意，值得被系統化嗎？',
    'body'    => '《創業這條路》教你把生意蓋成能複製五千次的樣板；《痛點》這把尺，幫你在動手蓋之前，先確認外面真的有人在要。現在就免費體檢一個點子，五分鐘找出你最弱、最該先補的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '創業這條路', 'path' => '/lens/the-e-myth-revisited'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
