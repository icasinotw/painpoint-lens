<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他太太只懂一塊，就贏過了他｜痛點 P.A.I.N.',
  'desc'  => '《祖魯法則》的名字來自史萊特的太太——她讀完一篇講祖魯人的短文，對那塊小主題的了解就贏過了見多識廣的他。史萊特把這變成鐵律：別想搞懂整個市場，挑一塊小到別人看不上的縫，鑽到全世界沒人比你更懂。用痛點的眼光重讀：你那個想吃下整片市場的大點子，大到自己都跑不動；真正贏得了的，是一群窄到不行、卻有人天天在痛的人。',
  'path'  => '/lens/the-zulu-principle',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《祖魯法則》',
  'heading'   => '他太太只懂一塊，就贏過了他',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-zulu-principle.html',
  'book'      => ['name' => '祖魯法則（The Zulu Principle）', 'author' => 'Jim Slater 吉姆・史萊特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '替你的點子，找出那塊最窄的縫',
    'body'    => '史萊特贏，是因為他把火力全壓在一塊小到別人看不上的地方。你那個點子也一樣——先別管市場有多大，把客群一刀一刀削到只剩一種最具體、又真的在痛的人，那塊縫才是你贏得了的地方。',
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
    ['name' => '祖魯法則',  'path' => '/lens/the-zulu-principle'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
