<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '《創意天才的蝴蝶思考術》拆書：好點子飛出來那一刻，正是你最該走出門驗證的時候｜痛點 P.A.I.N.',
  'desc'  => '卡本尼《創意天才的蝴蝶思考術》教你撒網撈住腦中那隻突破點子。用痛點之尺重讀：那張網只撒在你腦袋裡，蝴蝶飛出來那股「一定行」是大腦在發獎金，跟市場買不買單牽不上線；你還缺第二張網——撒到腦袋外面、撈一個陌生人掏不掏錢的事實。',
  'path'  => '/lens/the-net-and-the-butterfly',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創意天才的蝴蝶思考術》',
  'heading'   => '卡本尼花一整本書教你撒網撈蝴蝶——把腦子裡那隻一閃而過的好點子抓住、別讓牠飛走；可蝴蝶撈上來那一刻你心裡喊的「這一定行」，正是你最該再撒一張網的時候——一張撒到腦袋外面、撈一個陌生人掏不掏錢的網，而這張網，她整本書一個字沒教你撒',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-net-and-the-butterfly.html',
  'book'      => ['name' => '創意天才的蝴蝶思考術', 'author' => 'Olivia Fox Cabane 奧麗薇亞・福克斯・卡本尼、Judah Pollack 朱達・波拉克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定行」，是大腦發給自己的獎金，還是一個陌生人掏錢買單的事實？',
    'body'    => '卡本尼教你撒網撈住腦中那隻蝴蝶。這禮拜，把你最得意的那個點子連同一個你真會開的價格，端到一個對你沒義務的陌生人面前——讓他掏不掏錢，替你撒一次你腦袋外面那張網。',
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
    ['name' => '創意天才的蝴蝶思考術', 'path' => '/lens/the-net-and-the-butterfly'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
