<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別把「聽起來會賺」當成「會賺」：用痛點之尺拆《漫步華爾街》｜痛點 P.A.I.N.',
  'desc'  => '《漫步華爾街》用幾十年數據證明，連專家都贏不過大盤——因為「故事動人」不等於「結論可靠」。用痛點的眼光重讀墨基爾這本投資經典：別愛上一個聽起來會賺的故事，先找到證據，再投時間和錢。',
  'path'  => '/lens/a-random-walk-down-wall-street',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《漫步華爾街》',
  'heading'   => '別把「聽起來會賺」當成「會賺」',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/a-random-walk-down-wall-street.html',
  'book'      => ['name' => '漫步華爾街（A Random Walk Down Wall Street）', 'author' => 'Burton Malkiel 柏頓・墨基爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別把「聽起來會賺」當成「會賺」——先驗證，再下注',
    'body'    => '《漫步華爾街》用幾十年數據，教你別被一支股票的故事騙；《痛點》這把尺，幫你把同一個動作用在下一個點子上——先確認真的有人在痛、在付錢，再把時間和錢投下去。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '漫步華爾街',     'path' => '/lens/a-random-walk-down-wall-street'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
