<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《數值化之鬼》｜痛點 P.A.I.N.',
  'desc'  => '安藤廣大的識學要你關掉情緒、把工作翻成數字，像鬼一樣盯著行動量與變數。用痛點的眼光重讀：數字只忠實回答你問它的問題——你緊盯的那條曲線，量的是「有沒有人要」，還是只是「你有多努力」？',
  'path'  => '/lens/the-numbers-fiend',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《數值化之鬼》',
  'heading'   => '你把一個沒人要的東西，數值化得很漂亮',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-numbers-fiend.html',
  'book'      => ['name' => '數值化之鬼（数値化の鬼）', 'author' => '安藤廣大（安藤広大）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最得意的那個數字，量對方向了嗎',
    'body'    => '把工作數值化能讓你看清自己有多勤、多準，卻量不出你做的這件事到底有沒有人要；下次把某個 KPI 衝到頂之前，先確認它對準的是門外那些可能掏錢的人。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '數值化之鬼',     'path' => '/lens/the-numbers-fiend'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
