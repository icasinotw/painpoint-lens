<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他出國一趟，才看見大家都在忍的痛：用痛點之尺重讀《宜得利淬鍊50年的原則》｜痛點 P.A.I.N.',
  'desc'  => '似鳥昭雄的轉彎，發生在一趟美國行——他在一間尋常的美國客廳裡，看見了全日本都習慣、卻沒人開口抱怨的痛。用痛點的眼光重讀宜得利半世紀：最大的痛，常是被忍到不出聲的那種；它不靠抱怨被看見，要靠一個參照點，把那道落差照成算得出來的數字。',
  'path'  => '/lens/nitori-principles',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《宜得利淬鍊50年的原則》',
  'heading'   => '他出國一趟，才看見大家都在忍的痛',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/nitori-principles.html',
  'book'      => ['name' => '宜得利淬鍊50年的原則', 'author' => '似鳥昭雄'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你身邊那件「就是這樣啊」的事，藏著多大一道落差？',
    'body'    => '似鳥昭雄是在美國客廳裡，才看見全日本忍著的那個痛。《痛點》這把尺，幫你在動工前先把「到底是誰、為什麼會掏錢」問到具體。挑一件你早就認了的事，五分鐘跑一遍，看清楚它底下有沒有人正默默付著代價。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '宜得利淬鍊50年的原則',     'path' => '/lens/nitori-principles'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
