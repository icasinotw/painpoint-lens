<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《起床後的黃金1小時》｜痛點 P.A.I.N.',
  'desc'  => '史鮑訪談六十四個成功者的早晨，最大的發現是它們彼此打架、根本沒有標準答案；多數人卻拿螢光筆把別人最厲害的零件圈下來，照單抄成一個四不像。用痛點的眼光重讀《起床後的黃金1小時》：讀別人的早晨是競品研究，不是購物清單，你那套合身的早晨，得拿自己真實的每一天、一次推一個小版本試出來。',
  'path'  => '/lens/my-morning-routine',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《起床後的黃金1小時》',
  'heading'   => '逛完六十四個人的早晨，真正的功課才開始',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/my-morning-routine.html',
  'book'      => ['name' => '起床後的黃金1小時（My Morning Routine）', 'author' => 'Benjamin Spall（班傑明・史鮑）、Michael Xander（麥可・桑德）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那套早晨，得拿自己真實的每一天試出來',
    'body'    => '讀完六十四個人的早晨，別急著把最厲害的零件全裝到自己身上。先連三天抓出你早上第一個卡點，再只挑一個做法試一週——一次一件，慢慢長出一套合你身的早晨。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '起床後的黃金1小時',         'path' => '/lens/my-morning-routine'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
