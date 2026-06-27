<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你替市場把答案都想好了，它就再也沒開過口：用痛點之尺重讀《影響力領導》｜痛點 P.A.I.N.',
  'desc'  => '《影響力領導》教你別當把團隊越帶越笨的「減數者」，改當靠提問把人帶聰明的「乘數者」。用痛點之尺重讀：你對市場正是那個減數者——早替它填好「一定有人要」的答案，卻從沒安靜下來，聽它用掏不掏錢回答你。',
  'path'  => '/lens/multipliers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《影響力領導》',
  'heading'   => '你替市場把答案都想好了，它就再也沒開過口',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/multipliers.html',
  'book'      => ['name' => '影響力領導：5大原則培養乘數思維', 'author' => 'Liz Wiseman 莉茲・懷斯曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，問過市場本人了嗎？',
    'body'    => '《影響力領導》教你把會議室裡的人帶到發光；《痛點》這把尺，幫你先聽見市場那聲最小、最值錢的回答。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '影響力領導', 'path' => '/lens/multipliers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
