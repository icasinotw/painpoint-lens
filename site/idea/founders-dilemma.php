<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '有錢還是國王：創辦人早晚要選的一題｜經典觀念',
  'desc'  => '哈佛商學院教授華瑟曼研究幾千位創辦人發現：想把公司做大、賺到最多錢，通常得引進投資人、交出股權與控制權，甚至被自己創的公司換掉；想牢牢當國王、自己說了算，公司往往長不大。用台灣在地例子白話帶你看懂這個兩難。',
  'path'  => '/idea/founders-dilemma',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 諾姆・華瑟曼',
  'heading'   => '有錢還是國王：創辦人早晚要選的一題',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/founders-dilemma.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典，值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本，當你進門的橋。讀懂了觀念，更多用同一種眼光拆解的商業經典，都在拆書區等你。',
    'primary' => ['url' => '/lens', 'label' => '去看更多拆書'],
    'ghost'   => ['url' => '/idea', 'label' => '更多經典觀念'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '經典觀念',   'path' => '/idea'],
    ['name' => '創辦人的兩難', 'path' => '/idea/founders-dilemma'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
