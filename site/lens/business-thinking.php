<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '商業思維的第一筆帳，算的是你自己：用痛點之尺重讀《商業思維》｜痛點 P.A.I.N.',
  'desc'  => '游舒帆的《商業思維》要你戴上經營者的眼睛，把每件事連回公司的營收、成本與利潤。用痛點的眼光重讀：這副眼鏡最該先轉過來對準你自己——公司少了你，哪一條數字會真的痛？先把「我很重要」換算成一個你敢看的數字，再談怎麼經營公司。',
  'path'  => '/lens/business-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《商業思維》',
  'heading'   => '商業思維的第一筆帳，算的是你自己',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/business-thinking.html',
  'book'      => ['name' => '商業思維 BUSINESS THINKING', 'author' => '游舒帆（Gipi）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你做的那些事，公司少了會痛嗎？',
    'body'    => '挑你這禮拜做過的三件事，每一件後面接一句話：這件事今天沒人做，公司哪裡會痛、誰會第一個跳腳？答不出來的，先別當成你的功勞。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '商業思維',    'path' => '/lens/business-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
