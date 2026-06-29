<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那個笨問題，你替自己的點子問過嗎：用痛點之尺重讀《經濟自然學》｜痛點 P.A.I.N.',
  'desc'  => '《經濟自然學》發現一件難堪的事：經濟學考一百分的學生，半年後連生活裡的基本經濟題都答不出來——他們把它背成公式，沒變成自己問出來的問題。用痛點的眼光重讀：你也背得出最小可行性、需求驗證一堆黑話，卻從沒蹲下來、用最白的話替點子問那個笨問題——為什麼到今天，還沒有人為它掏過錢？這禮拜，把那一句寫到紙上、帶出門。',
  'path'  => '/lens/the-economic-naturalist',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《經濟自然學》',
  'heading'   => '那個笨問題，你替自己的點子問過嗎',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-economic-naturalist.html',
  'book'      => ['name' => '經濟自然學', 'author' => '羅伯・法蘭克（Robert H. Frank）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，你替它問過那聲笨「為什麼」了嗎？',
    'body'    => '在做功能、修簡報之前，先逼自己用最白的話問一句：為什麼到今天，還沒有人為這件事掏過錢？答得出口，你才算真的開始驗它。',
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
    ['name' => '經濟自然學', 'path' => '/lens/the-economic-naturalist'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
