<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '光盯著結果，結果不會自己變好：用痛點之尺重讀《執行力的修練》｜痛點 P.A.I.N.',
  'desc'  => '《執行力的修練》把執行拆成四條紀律，最值錢的一格是「領先指標」——別盯只能乾瞪眼的結果，去撥那個今天就動得了、又能預測結果的小數字。用痛點的眼光重讀：一門生意最該補的領先指標，是先去確認那頭有沒有人要。',
  'path'  => '/lens/the-4-disciplines-of-execution',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《執行力的修練》',
  'heading'   => '光盯著結果，結果不會自己變好',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-4-disciplines-of-execution.html',
  'book'      => ['name' => '執行力的修練：與成功有約的四個實踐原則', 'author' => 'Chris McChesney 克里斯・麥切斯尼、Sean Covey 西恩・柯維、Jim Huling 吉姆・哈林'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最想達成的那個目標，那頭有人在等嗎？',
    'body'    => '把你最想達成的目標寫下來，然後逼自己填一個「這禮拜就做得了、又能左右它」的小動作。若它是想把一個點子變成生意，那一格八成該是：去找三個人，問他要不要。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '執行力的修練',  'path' => '/lens/the-4-disciplines-of-execution'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
