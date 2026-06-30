<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '想暢玩一人公司，先確認有人肯為你掏錢：用痛點之尺重讀《暢玩一人公司》｜痛點 P.A.I.N.',
  'desc'  => '于為暢的《暢玩一人公司》把「一個人」過成一種讓人羨慕的生活，是一張很好的個人品牌、自動化、被動收入操作手冊。用痛點的眼光重讀：書裡那台賺錢機器，預設你早就打好了一塊地基——底下站著一群痛到肯掏錢的人。它的力氣幾乎全花在「已經有人要」之後，而山腳下最難的那段「確認真的有人要」，得你自己走。先把已經為這個痛掏過錢的真人數出來，再去組裝那台自動化。',
  'path'  => '/lens/play-your-one-person-company',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《暢玩一人公司》',
  'heading'   => '想暢玩一人公司，先確認有人肯為你掏錢',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/play-your-one-person-company.html',
  'book'      => ['name' => '暢玩一人公司', 'author' => '于為暢'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '機器組好了，底下那群人還得你去確認',
    'body'    => '于為暢教你把一人公司的內容、自動化、被動收入組成一台機器；痛點這把尺，幫你補上那台機器底下最難的一格——肯為你打算解的痛掏錢的真人，到底找不找得到、夠不夠。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '暢玩一人公司',   'path' => '/lens/play-your-one-person-company'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
