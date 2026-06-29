<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒人推他，他自己又回來了：用痛點之尺重讀《銷售聖經》｜痛點 P.A.I.N.',
  'desc'  => '基特瑪的《銷售聖經》把賣東西拆成一條條今天就能用的規矩，還教你別追顧客滿意、要追忠誠。用痛點的眼光重讀：客人嘴上說滿意，跟他沒人催就自己回來買第二次，是兩件事——會自己回來的人，才是你這門生意底下真有痛的證據。先把推力撤掉，數數有幾個人會自己回來。',
  'path'  => '/lens/the-sales-bible',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《銷售聖經》',
  'heading'   => '沒人推他，他自己又回來了',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-sales-bible.html',
  'book'      => ['name' => '銷售聖經', 'author' => 'Jeffrey Gitomer（傑佛瑞・基特瑪）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在練成交話術之前，先確認有人會回來',
    'body'    => '《銷售聖經》教你把一個猶豫的人說到點頭；痛點這把尺，幫你先確認點頭之後他還會不會自己回來。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '銷售聖經',   'path' => '/lens/the-sales-bible'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
