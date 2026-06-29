<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的產品，最後會長成出錢那個人的形狀｜痛點 P.A.I.N.',
  'desc'  => '祖博夫《監控資本主義時代》拆穿那台機器：你用的搜尋與社群是免費的餌，你留下的行為碎屑才是商品，真正的客戶是想算準你下一步的廣告商。用痛點的眼光重讀：每門生意都會慢慢長成「出錢那個人」的痛的形狀。這禮拜，替你的點子寫下三個名字——誰在用、誰在痛、誰在付錢。',
  'path'  => '/lens/the-age-of-surveillance-capitalism',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《監控資本主義時代》',
  'heading'   => '你的產品，最後會長成出錢那個人的形狀',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-age-of-surveillance-capitalism.html',
  'book'      => ['name' => '監控資本主義時代（The Age of Surveillance Capitalism）', 'author' => 'Shoshana Zuboff 肖莎娜・祖博夫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，誰在用、誰在痛、誰在付錢？',
    'body'    => '在你賭下兩三年之前，先把這三個名字分開寫清楚。如果用戶免費、要靠別人變現，圈出那個出錢的人——你的產品三年後，會誠實地長成他的形狀。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '監控資本主義時代',        'path' => '/lens/the-age-of-surveillance-capitalism'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
