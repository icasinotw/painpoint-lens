<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《自由選擇背後的行為賽局》｜痛點 P.A.I.N.',
  'desc'  => '謝林證明，一群人會做出什麼，沒辦法把每個人此刻的選擇加起來算；很多東西要先湊到一群人才會自己滾，在那之前沒人肯先動。用痛點的眼光重讀：「臨界點」是真的，卻也是創業者最好用的自我安慰，把「沒人要」全重新命名成「還沒引爆」——分辨的土法子，是去找一個孤單也願意先掏錢的真人。',
  'path'  => '/lens/micromotives-and-macrobehavior',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《自由選擇背後的行為賽局》',
  'heading'   => '「再等等就會紅」，是最甜的一句自我安慰',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/micromotives-and-macrobehavior.html',
  'book'      => ['name' => '自由選擇背後的行為賽局', 'author' => '湯瑪斯・謝林 Thomas C. Schelling'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '「還沒引爆」，還是根本沒人要？',
    'body'    => '謝林讓你看清「再等等就會紅」常常只是個讓你安心的擋箭牌；要分辨，只看一件事——有沒有一個孤單也願意先掏錢的真人。',
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
    ['name' => '自由選擇背後的行為賽局',  'path' => '/lens/micromotives-and-macrobehavior'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
