<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '挑不出毛病的那份報告，最該被你懷疑：用痛點之尺重讀《當麥肯錫來了》｜痛點 P.A.I.N.',
  'desc'  => '《當麥肯錫來了》揭開全球最有名望顧問公司藏在保密協定底下的案子，從鴉片類止痛藥到威權政府。用痛點的眼光重讀：麥肯錫是把「賣解法」做到極致的人，它的報告數字算得再漂亮，也總少算一格——這個結論真正的代價，落到了哪個不在房間裡的人頭上。',
  'path'  => '/lens/when-mckinsey-comes-to-town',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《當麥肯錫來了》',
  'heading'   => '挑不出毛病的那份報告，最該被你懷疑',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/when-mckinsey-comes-to-town.html',
  'book'      => ['name' => '當麥肯錫來了（When McKinsey Comes to Town）', 'author' => 'Walt Bogdanich 沃特・博格丹尼奇、Michael Forsythe 傅才德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先算清楚，這個漂亮結論的帳，誰在付',
    'body'    => '《當麥肯錫來了》讓你看見最聰明的報告也會少算一格；痛點這把尺，逼你先把那一格補回來——這個結論成立的話，代價落到誰頭上。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '當麥肯錫來了',   'path' => '/lens/when-mckinsey-comes-to-town'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
