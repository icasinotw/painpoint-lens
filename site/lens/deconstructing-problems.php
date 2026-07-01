<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那棵邏輯樹，長在沒驗過的假設上：用痛點之尺拆《拆解問題的技術》｜痛點 P.A.I.N.',
  'desc'  => '趙胤丞把「拆解問題」練成一套 SOP：邏輯樹、心智圖、MECE，一團模糊的煩，他能拆成看得見、動得了的小問題。用痛點的眼光重讀：這套功夫不挑對象，你餵它真問題它解得又快又準，餵它一個沒人在乎的假問題，它照樣幫你拆得井井有條。它教你把問題拆對，卻少教你確認這題到底有沒有人正在為它痛。',
  'path'  => '/lens/deconstructing-problems',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《拆解問題的技術》',
  'heading'   => '你那棵邏輯樹，長在沒驗過的假設上',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/deconstructing-problems.html',
  'book'      => ['name' => '拆解問題的技術', 'author' => '趙胤丞'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在拆的那個問題，確定有人在為它痛嗎',
    'body'    => '趙胤丞教你把問題拆得漂亮；痛點這把尺，幫你先確認這題值得拆——外面到底有沒有真人正為這道落差付代價。花五分鐘，把你手上的點子拿去體檢，看出你最沒把握的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '拆解問題的技術',   'path' => '/lens/deconstructing-problems'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
