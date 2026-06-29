<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一句使命是真是假，看它讓你不做了什麼：用痛點之尺重讀《企業初心》｜痛點 P.A.I.N.',
  'desc'  => '喬利帶百思買翻身，喊的使命跟所有公司官網上的漂亮話沒兩樣。用痛點的眼光重讀《企業初心》：一句使命是真是假，不看它寫得多動聽，看它讓你「不做」了什麼——百思買主動對齊亞馬遜價、放掉一截毛利，就是它替「以客戶為先」付的第一張帳單。崇高的目的人人會喊，肯為它付代價的人很少。',
  'path'  => '/lens/the-heart-of-business',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《企業初心》',
  'heading'   => '一句使命是真是假，看它讓你不做了什麼',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-heart-of-business.html',
  'book'      => ['name' => '企業初心', 'author' => 'Hubert Joly（修伯特・喬利）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你掛在牆上的那句使命，最近一次為它賠過什麼？',
    'body'    => '挑一句你或公司常喊的「我們最重視」，逼自己寫下最近一次為它推掉的生意、選的那條比較貴的路。寫得出來，這句話是真的；半天擠不出半個例子，它還只是一張海報。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '企業初心',       'path' => '/lens/the-heart-of-business'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
