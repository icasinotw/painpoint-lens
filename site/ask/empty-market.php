<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒人做的市場，是藍海還是墳場？三種「沒人做」怎麼分｜痛點之尺',
  'desc'  => '發現一個沒人在做的市場，該興奮還是該逃？「沒人做」底下藏著三種處境:還沒被發現的好地、種什麼死什麼的鹽鹼地、大廠懶得彎腰的小縫。先看土(有沒有人正在為它付代價)、再算收成(那代價養不養得活一個解法),教你分辨腳下是哪一種地。',
  'path'  => '/ask/empty-market',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺・拆問題 · 藍海還是墳場',
  'heading'   => '一個「沒人在做」的點子，該興奮，還是該逃？',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/empty-market.html',
  'back'      => ['url' => '/ask', 'label' => '← 全部拆問題'],
  'root'      => ['name' => '拆問題', 'path' => '/ask'],
  'funnel'    => [
    'title'   => '蹲下去看土之前，先讓尺幫你問一遍',
    'body'    => '免費的點子體檢，會帶你照「先看土、再算收成」的順序，把一個點子一格一格問過——省得你又先愛上結論。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => null,
  'next'      => ['url' => '/ask/fake-demand', 'label' => '二十幾個人都說「我會買」，上線那天一張單都沒進'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '拆問題',       'path' => '/ask'],
    ['name' => '藍海還是墳場',  'path' => '/ask/empty-market'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
