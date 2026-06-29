<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你問到的「會買」，跟牆上的標語一樣不算數｜痛點 P.A.I.N.',
  'desc'  => '夏恩在《組織文化與領導》把文化剝成三層：看得見的器物、嘴上信奉的價值觀、沒人說出口的基本假設，真正在開車的是最底層。用痛點之尺重讀：你問市場「會不會買」，那聲「會」只是中間層的場面話——一個點子真正的底，藏在他平常實際怎麼做、為這件事掏過什麼。',
  'path'  => '/lens/organizational-culture-and-leadership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《組織文化與領導》',
  'heading'   => '你問到的「會買」，跟牆上的標語一樣不算數',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/organizational-culture-and-leadership.html',
  'book'      => ['name' => '組織文化與領導', 'author' => 'Edgar H. Schein 艾德加・夏恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，翻過它的抽屜嗎？',
    'body'    => '夏恩讀一個文化，靠的全是去看一群人實際做了什麼、出事時先保住什麼；這雙眼睛，該先轉去讀你那個點子要服務的真人——去看他現在怎麼將就這個問題、上次為它花過多少時間和錢。',
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
    ['name' => '組織文化與領導', 'path' => '/lens/organizational-culture-and-leadership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
