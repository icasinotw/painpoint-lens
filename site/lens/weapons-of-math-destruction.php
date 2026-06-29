<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最信的那個數字，沒人回頭驗過它：用痛點之尺重讀《大數據的傲慢與偏見》｜痛點 P.A.I.N.',
  'desc'  => '歐尼爾在《大數據的傲慢與偏見》裡，用黑盒子、規模、沒有回饋三刻度，判定哪些演算法是會害人的數學武器。用痛點的眼光重讀：你自己天天盯的那個指標，可能正是一把對著你開火的武器——它從沒被一個真實付錢的客戶驗過。',
  'path'  => '/lens/weapons-of-math-destruction',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《大數據的傲慢與偏見》',
  'heading'   => '你最信的那個數字，沒人回頭驗過它',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/weapons-of-math-destruction.html',
  'book'      => ['name' => '大數據的傲慢與偏見：一個「圈內數學家」對演算法的良心告白（Weapons of Math Destruction）', 'author' => 'Cathy O\'Neil 凱西・歐尼爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個數字，經得起戳嗎?',
    'body'    => '歐尼爾教你拆穿大機器的數學武器；同一把尺，也能拿來戳你自己天天盯的那個指標——它到底對應到一個真痛、一個會掏錢的活人，還是只是好看。把它攤開照一照，看看那條漂亮曲線底下，有沒有地基。',
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
    ['name' => '大數據的傲慢與偏見', 'path' => '/lens/weapons-of-math-destruction'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
