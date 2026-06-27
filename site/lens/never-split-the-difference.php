<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你要等的，是那句「對，就是這樣」：用痛點之尺拆《FBI談判協商術》｜痛點 P.A.I.N.',
  'desc'  => '佛斯最不想從綁匪嘴裡聽到的一句話是「你說得對」——那是想把你打發走的客套。用痛點的眼光重讀《FBI談判協商術》：你做需求訪談釣回來的「不錯、我會用」，多半就是市場版的「你說得對」；學會標註痛點、用校準問題逼出那句「對，就是這樣」，再動手。',
  'path'  => '/lens/never-split-the-difference',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《FBI談判協商術》',
  'heading'   => '你要等的，是那句「對，就是這樣」',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/never-split-the-difference.html',
  'book'      => ['name' => 'FBI談判協商術：讓對手乖乖聽話的高超說服技巧（Never Split the Difference）', 'author' => 'Chris Voss 克里斯・佛斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那聲「有人要」，是真的有人要，還是一排禮貌的「你說得對」？',
    'body'    => '佛斯靠標註情緒、校準問題，逼出對方那句「對，就是這樣」；《痛點》這把尺，幫你把同一個動作用在點子上——別收下嘴上的「不錯」，去找真的會掏錢、會熬夜的那個人。現在就免費體檢一個點子，照出你那聲「有人要」最該先補的一塊；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => 'FBI談判協商術',        'path' => '/lens/never-split-the-difference'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
