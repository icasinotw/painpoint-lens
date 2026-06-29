<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那條斜線，得有人肯付錢才算數：用痛點之尺重讀《斜槓青年》｜痛點 P.A.I.N.',
  'desc'  => '多數人把「斜槓青年」讀成多接幾個案子、多掛幾條斜線；庫安寫的其實幾乎相反。用痛點的眼光重讀《斜槓青年》：加一條斜線，本質上跟推一個新產品一樣，得先確認外面真有人要——別只迷上「我是斜槓青年」這個身分，先替那條斜線做一次最小的需求驗證。',
  'path'  => '/lens/slash-youth',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《斜槓青年》',
  'heading'   => '那條斜線，得有人肯付錢才算數',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/slash-youth.html',
  'book'      => ['name' => '斜槓青年：全球職涯新趨勢，迎接更有價值的多職人生', 'author' => 'Susan Kuang（蘇珊・庫安）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最想加的那條斜線，外面真的有人在等嗎？',
    'body'    => '別只迷上「我是斜槓青年」這個身分，先用一個週末做出一個最小的東西，丟到不認識你的人面前，看有沒有一個陌生人肯付第一筆錢——這才是把這套活法搬到你身上的真正吃法。',
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
    ['name' => '斜槓青年',        'path' => '/lens/slash-youth'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
