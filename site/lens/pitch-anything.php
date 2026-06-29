<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '台下那隻鱷魚腦，是你最誠實的市調：用痛點之尺重讀《募資提案教父的破億成交術》｜痛點 P.A.I.N.',
  'desc'  => '克拉夫教你用框架與氣場，讓提案撞進對方那顆只管生死的「鱷魚腦」、當場點頭。用痛點之尺重讀：那隻鱷魚喊無聊的瞬間，正是你能拿到最誠實、最便宜的一次需求調查——先問牠餓不餓，再磨你的話術。',
  'path'  => '/lens/pitch-anything',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《募資提案教父的破億成交術》',
  'heading'   => '台下那隻鱷魚腦，是你最誠實的市調',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/pitch-anything.html',
  'book'      => ['name' => '募資提案教父的破億成交術', 'author' => '歐倫·克拉夫 Oren Klaff'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，鱷魚腦會買單嗎？',
    'body'    => '克拉夫教你把提案演到對方無法抗拒；但先確認你那個點子，台下真的有人餓著要。花五分鐘免費體檢，看那個洞到底有多深、有幾個人在排隊。',
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
    ['name' => '募資提案教父的破億成交術', 'path' => '/lens/pitch-anything'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
