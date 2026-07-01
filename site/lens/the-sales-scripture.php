<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《絕對成交！業務聖經》｜痛點 P.A.I.N.',
  'desc'  => '大塚壽《絕對成交！業務聖經》把頂尖業務的本事拆成一套關掉天分也能複製的流程。用痛點的眼光重讀：再完美的成交流程，也只站在「已經有人想要」的下游——開賣之前，先量一次沒有話術撐著時，還剩多少真的拉力。',
  'path'  => '/lens/the-sales-scripture',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《絕對成交！業務聖經》',
  'heading'   => '出菜零失誤的廚房，一間沒客人上門的店',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-sales-scripture.html',
  'book'      => ['name' => '絕對成交！業務聖經', 'author' => '大塚壽'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「一定有人要」的東西，門外真的有人餓嗎？',
    'body'    => '大塚壽教你把生意做得又穩又漂亮，前提是生意本身得先存在；先花五分鐘，把你那個點子最弱的那一軸量出來，看看門外到底有沒有人餓。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '絕對成交！業務聖經',    'path' => '/lens/the-sales-scripture'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
