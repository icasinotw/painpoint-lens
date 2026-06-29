<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '凡是「全都要」的計畫，都在偷偷三選二｜痛點 P.A.I.N.',
  'desc'  => '羅德里克《全球化矛盾》的「政治三難困境」說：超級全球化、民主、國家自主，三樣最多保住兩樣。用痛點的眼光重讀：你那份計畫也在偷偷三選二——成長、品質、賺錢想全都要，現實就會替你亂砍一格。把代價先算給自己看。',
  'path'  => '/lens/the-globalization-paradox',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《全球化矛盾》',
  'heading'   => '凡是「全都要」的計畫，都在偷偷三選二',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-globalization-paradox.html',
  'book'      => ['name' => '全球化矛盾', 'author' => 'Dani Rodrik 丹尼・羅德里克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那份計畫，三個目標正並排閃閃發亮？',
    'body'    => '羅德里克逼一個國家承認它不可能全都要；你那份計畫也一樣。先別管放掉哪一格——先確認那三個目標底下，至少有一個是真的有人在痛、有人會掏錢，而不是三個都還是你自己的假設。',
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
    ['name' => '全球化矛盾', 'path' => '/lens/the-globalization-paradox'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
