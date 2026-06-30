<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一群諾貝爾獎得主，怎麼會在四個月內爆掉：用痛點之尺重讀《跌落神壇的金融天才》｜痛點 P.A.I.N.',
  'desc'  => '羅文斯坦寫長期資本管理（LTCM）的興衰：兩位諾貝爾獎得主、最強的交易員、最精密的模型，卻在四個多月內幾乎輸光。用痛點之尺重讀：他們把「會不會發生」算到小數點後好幾位，卻沒算「萬一發生、又借了三十倍，會痛到什麼地步」——低機率，不等於低代價。',
  'path'  => '/lens/when-genius-failed',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《跌落神壇的金融天才》',
  'heading'   => '一群諾貝爾獎得主，怎麼會在四個月內爆掉',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/when-genius-failed.html',
  'book'      => ['name' => '跌落神壇的金融天才：諾貝爾經濟學獎得主與華爾街菁英的賭局與崩盤', 'author' => 'Roger Lowenstein 羅傑・羅文斯坦'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最有把握的那個決定，算過「萬一錯了」要賠多少嗎？',
    'body'    => '挑一件你最近最有把握、又打算加大力道去做的事，先別管成功機率，改算一個煞風景的數字：萬一沒成、而你又借了錢押上全部，你會賠掉什麼？把它具體寫下來。',
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
    ['name' => '跌落神壇的金融天才', 'path' => '/lens/when-genius-failed'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
