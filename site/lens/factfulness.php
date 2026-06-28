<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '羅斯林考倒滿屋菁英，你正用同一顆腦袋替點子打分數｜痛點 P.A.I.N.',
  'desc'  => '《真確》的羅斯林拿世界常識考倒記者、高管、諾貝爾得主——大家答得比黑猩猩亂猜還差，因為直覺總把人往戲劇化的方向帶。用痛點之尺重讀:你看自己的點子，直覺也往同一邊倒，只是這回倒向最甜的「一定有人要」;羅斯林的解藥很笨——別信腦中的故事，去拿一個真實的比例。',
  'path'  => '/lens/factfulness',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《真確》',
  'heading'   => '羅斯林考倒滿屋菁英，你正用同一顆腦袋替自己的點子打分數',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/factfulness.html',
  'book'      => ['name' => '真確:扭轉十大直覺偏誤，發現事情比你想的美好', 'author' => '漢斯・羅斯林、歐拉・羅斯林、安娜・羅斯林・羅朗德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正好有一個你很篤定的點子?',
    'body'    => '《真確》教你遇到篤定就去翻一個真數字;這個點子，現在就花五分鐘免費體檢一次，看出你最弱、最沒查證的那一軸。',
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
    ['name' => '真確',      'path' => '/lens/factfulness'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
