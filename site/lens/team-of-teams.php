<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你查遍了所有資料，就是沒接上會掏錢的那條前線：用痛點之尺重讀《美軍四星上將教你打造黃金團隊》｜痛點 P.A.I.N.',
  'desc'  => '《美軍四星上將教你打造黃金團隊》講麥克克里斯托怎麼靠重接情報線路反敗為勝。用痛點之尺重讀：抱著點子的你，也是情報最多的那種指揮官，查遍了競品與市場，唯獨沒接上那條會回話、會掏錢的前線。',
  'path'  => '/lens/team-of-teams',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《美軍四星上將教你打造黃金團隊》',
  'heading'   => '你查遍了所有資料，就是沒接上會掏錢的那條前線',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/team-of-teams.html',
  'book'      => ['name' => '美軍四星上將教你打造黃金團隊', 'author' => 'Stanley McChrystal 史丹利・麥克克里斯托'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，接過前線的線了嗎？',
    'body'    => '《美軍四星上將教你打造黃金團隊》教你把情報接到會打仗的人手上；《痛點》這把尺，幫你先把線接到市場本人。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '美軍四星上將教你打造黃金團隊', 'path' => '/lens/team-of-teams'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
