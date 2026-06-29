<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你嫌它忽上忽下，只是你等得不夠久：用痛點之尺重讀《長線獲利之道》｜痛點 P.A.I.N.',
  'desc'  => '《長線獲利之道》用兩百年的數據證明：同一檔股票，放一年像心電圖，退三步看是一道緩坡。用痛點的眼光重讀席格爾——別拿一段太短的觀察，去替一件要很久才見真章的事下判決。',
  'path'  => '/lens/stocks-for-the-long-run',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《長線獲利之道》',
  'heading'   => '你嫌它忽上忽下，只是你等得不夠久',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/stocks-for-the-long-run.html',
  'book'      => ['name' => '長線獲利之道：散戶投資正典（Stocks for the Long Run）', 'author' => 'Jeremy Siegel 傑諾米・席格爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂時間怎麼算之後，下一個念頭先別急著押下去',
    'body'    => '席格爾教你用對的時間尺，去量一件要很久才見真章的事；你手上那個還沒生出來的點子，缺的卻是另一張考卷——有沒有人真的會為它掏錢。花五分鐘把它攤開照一照，看出你最弱、最沒驗過的那一軸。',
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
    ['name' => '長線獲利之道', 'path' => '/lens/stocks-for-the-long-run'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
