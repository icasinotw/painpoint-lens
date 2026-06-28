<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子的成長，是長出來的，還是你一鏟一鏟塞進去的？｜痛點 P.A.I.N.',
  'desc'  => '蘇聯靠榨取衝出過幾十年高速成長，後來毫無預警地停住——艾塞默魯說那種繁榮底下沒有自己的引擎。用痛點之尺重讀《國家為什麼會失敗》：你那個點子帳面上的熱鬧，會不會也是你一鏟一鏟塞出來的？這禮拜，把手抽開，看它還站不站得住。',
  'path'  => '/lens/why-nations-fail',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《國家為什麼會失敗》',
  'heading'   => '你那個點子的引擎，是不是還插在你一個人身上',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/why-nations-fail.html',
  'book'      => ['name' => '國家為什麼會失敗（Why Nations Fail）', 'author' => 'Daron Acemoglu 戴倫・艾塞默魯、James Robinson 詹姆斯・羅賓森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個帳面上很熱鬧、卻還沒人真的掏錢的點子？',
    'body'    => '在你再往它裡頭塞一個週末之前，先把手抽開幾分鐘，看看撐著這份熱鬧的，到底是市場，還是你自己那隻一直沒鬆的手。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '國家為什麼會失敗',        'path' => '/lens/why-nations-fail'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
