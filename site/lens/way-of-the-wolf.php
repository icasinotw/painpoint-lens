<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他能把任何人說到點頭，包括根本不需要的人｜痛點 P.A.I.N.',
  'desc'  => '《跟華爾街之狼學銷售》把成交拆成一條直線，教你把客戶對產品、對你、對公司的確定感從三分墊到十分。用痛點之尺補上貝爾福從不丈量的那一端：線另一頭那個人，是真的在痛，還是這份確定全是你當場替他裝上的。',
  'path'  => '/lens/way-of-the-wolf',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《跟華爾街之狼學銷售》',
  'heading'   => '他能把任何人說到點頭，包括根本不需要的人',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/way-of-the-wolf.html',
  'book'      => ['name' => '跟華爾街之狼學銷售', 'author' => 'Jordan Belfort 喬登・貝爾福'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '線的另一頭那個人，是真在痛，還是你裝上去的？',
    'body'    => '貝爾福教你把客戶的確定感從三分墊到十分；《痛點》這把尺，幫你確認那份確定底下壓著的是真痛，還是一團被你語調烘熱的空氣。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '跟華爾街之狼學銷售', 'path' => '/lens/way-of-the-wolf'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
