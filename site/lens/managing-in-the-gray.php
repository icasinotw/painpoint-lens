<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒有標準答案的題，最怕你自己發明一個：用痛點之尺重讀《管理最難的一課──灰色地帶》｜痛點 P.A.I.N.',
  'desc'  => '巴達拉克在《管理最難的一課──灰色地帶》裡說：管理最難的，是那些兩邊都有道理、你怎麼選都會有人受傷、卻沒有標準答案的灰色地帶。用痛點的眼光重讀：人一走進沒有答案的地方，會急著抓一份漂亮劇本假裝有答案。用他的五問把臉轉回現實、把代價算成一個你敢看的數字，別再找人替你背書。',
  'path'  => '/lens/managing-in-the-gray',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《管理最難的一課──灰色地帶》',
  'heading'   => '沒有標準答案的題，最怕你自己發明一個',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/managing-in-the-gray.html',
  'book'      => ['name' => '管理最難的一課──灰色地帶', 'author' => 'Joseph Badaracco（約瑟夫・巴達拉克）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上正卡著、還沒拍板的那個決定，是哪一個？',
    'body'    => '別急著再找一個人替你按讚。今晚從那五問裡，挑出你最會下意識跳過的一格，只補那一格，把答案寫成幾行你敢貼給自己看的字。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                       'path' => '/'],
    ['name' => '痛點之尺',                    'path' => '/lens'],
    ['name' => '管理最難的一課──灰色地帶',    'path' => '/lens/managing-in-the-gray'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
