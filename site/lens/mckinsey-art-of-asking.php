<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最利的提問，你捨不得對自己的點子用：用痛點之尺重讀《麥肯錫精準提問術》｜痛點 P.A.I.N.',
  'desc'  => '《麥肯錫精準提問術》把「問問題」練成一門對外的手藝：往下挖根因、往上逼意義。但顧問桌上的題，早有人付錢確認值得解；你自己的點子沒人替你拍板。用痛點的眼光看：最該動刀的那一問，是把提問轉過來對準自己最得意的假設——到底有沒有人，痛到願意付錢求你做回來。',
  'path'  => '/lens/mckinsey-art-of-asking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《麥肯錫精準提問術》',
  'heading'   => '最利的提問，你捨不得對自己的點子用',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/mckinsey-art-of-asking.html',
  'book'      => ['name' => '麥肯錫精準提問術', 'author' => '大嶋祥譽'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最得意的那個念頭，經得起一個笨問題嗎？',
    'body'    => '大嶋教你把提問練成對外的功夫；可你的點子最缺的那一問，是有沒有人痛到願意付錢。花五分鐘，把它最弱的地方先問出來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '麥肯錫精準提問術', 'path' => '/lens/mckinsey-art-of-asking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
