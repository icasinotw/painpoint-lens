<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他把一杯拿鐵，算成了一個你逃不掉的數字：用痛點之尺重讀《拿鐵因子》｜痛點 P.A.I.N.',
  'desc'  => '巴哈的《拿鐵因子》最厲害的一手不是叫你戒咖啡，是把一筆你天天在花、卻從沒正眼看過的小錢，換算成三十年後一個會讓你倒抽一口氣的數字。用痛點的眼光拆它：這正是痛點之尺對你口袋做的同一個動作——把代價逼成你能心算的數字。只是別忘了確認，你鏡頭對準的那杯，真的是在漏水的那杯。',
  'path'  => '/lens/the-latte-factor',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《拿鐵因子》',
  'heading'   => '他把一杯拿鐵，算成了一個你逃不掉的數字',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-latte-factor.html',
  'book'      => ['name' => '拿鐵因子（The Latte Factor）', 'author' => 'David Bach 大衛・巴哈、John David Mann 約翰・大衛・曼恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「才這麼一點」，算過三十年後的長相嗎',
    'body'    => '挑一個你天天順手花、卻從沒正眼看過的小開銷，把它一天的錢乘以三百六十五、再乘上你離退休還有的年數；那個數字會讓你愣住——這正是把模糊的代價逼成你能心算的數字，行動才會自己發生。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '拿鐵因子',   'path' => '/lens/the-latte-factor'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
