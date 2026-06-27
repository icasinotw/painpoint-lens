<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '愛你的人，正在對你的點子毀滅性同理：用痛點之尺重讀《徹底坦率》｜痛點 P.A.I.N.',
  'desc'  => '《徹底坦率》教主管對下屬說真話；但最該收到徹底坦率、又最不可能收到的，是手裡攥著創業點子的你——愛你的人都在對你的點子「毀滅性同理」。用痛點之尺看，能對你說真話的只剩市場：一個肯為它掏錢的陌生人。',
  'path'  => '/lens/radical-candor',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《徹底坦率》',
  'heading'   => '愛你的人，正在對你的點子毀滅性同理',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/radical-candor.html',
  'book'      => ['name' => '徹底坦率：一種有溫度而真誠的領導', 'author' => 'Kim Scott 金・史考特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的點子，聽過半年「聽起來不錯」，卻還沒人為它掏過錢？',
    'body'    => '《徹底坦率》教你怎麼討真話；《痛點》這把尺，幫你看清真話只有一種——有人肯掏錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '徹底坦率',  'path' => '/lens/radical-candor'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
