<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '擋在你點子和真人之間的，是一個你不敢聽的「不」：用痛點之尺重讀《被拒絕的勇氣》｜痛點 P.A.I.N.',
  'desc'  => '《被拒絕的勇氣》裡，蔣甲花一百天專程找人拒絕，把怕聽到「不」練到不痛。用痛點之尺重讀：擋住你去問真人「你要不要」的，正是這道拒絕之牆——而客戶那句「為什麼不要」，其實是市場免費塞給你的情報。',
  'path'  => '/lens/rejection-proof',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《被拒絕的勇氣》',
  'heading'   => '擋在你點子和真人之間的，是一個你不敢聽的「不」',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/rejection-proof.html',
  'book'      => ['name' => '被拒絕的勇氣', 'author' => 'Jia Jiang 蔣甲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title' => '把「敢開口」的膽，用到你點子上',
    'body'  => '蔣甲教你把怕拒絕練到不痛；《痛點》這把尺，教你走出門去撞那個「不」之後，怎麼從裡頭讀出真正的需求。膽子練大，是入場券；讀懂那些「不」，才是把點子做對的功課。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '被拒絕的勇氣', 'path' => '/lens/rejection-proof'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
