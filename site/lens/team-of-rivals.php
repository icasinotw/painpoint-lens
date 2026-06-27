<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '林肯把對手請進內閣，你只找會替你鼓掌的人：用痛點之尺重讀《無敵》｜痛點 P.A.I.N.',
  'desc'  => '《無敵》寫林肯把最想取代他的對手一個個請進內閣，要的從來不是一個人人點頭的會議室。用痛點之尺重讀：抱著點子的你也在組內閣，卻只找會替你鼓掌的自己人，獨缺唯一該請進門的對手——市場：到底有沒有人真的肯掏錢。',
  'path'  => '/lens/team-of-rivals',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《無敵》',
  'heading'   => '林肯把瞧不起他的人請進內閣，你只敢問會替你鼓掌的那幾個',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/team-of-rivals.html',
  'book'      => ['name' => '無敵：林肯不以任何人為敵人', 'author' => 'Doris Kearns Goodwin 桃莉絲・基恩斯・古德溫'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，請過會跟你唱反調的人來看嗎？',
    'body'    => '《無敵》寫林肯把最不服他的對手請進內閣，逼出比一桌點頭更好的決定；《痛點》這把尺，幫你把唯一缺席的那個對手——市場——請回桌邊：先確認真的有人在痛、肯掏錢，再動手。現在就免費體檢一個點子，五分鐘看出你最虛的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '無敵',      'path' => '/lens/team-of-rivals'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
