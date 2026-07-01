<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把天線對準世界，好點子自己會走進來：用痛點之尺重讀《創造力的修行》｜痛點 P.A.I.N.',
  'desc'  => '不會彈琴的傳奇製作人瑞克・魯賓，一生只練一件事：把自己調成一台收訊機，去接收世界。用痛點之尺重讀《創造力的修行》：好點子不是關在腦內想出來的，是把天線對準世界接收到的——但接進來的訊號裡，哪一個真的有人付錢，是他的書不回答、痛點要接手的題。',
  'path'  => '/lens/the-creative-act',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創造力的修行》',
  'heading'   => '把天線對準世界，好點子自己會走進來',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-creative-act.html',
  'book'      => ['name' => '創造力的修行', 'author' => 'Rick Rubin 里克・魯賓'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title' => '把天線對準世界，也對準「有沒有人要」',
    'body'  => '魯賓教你把注意力交給外面、讓真實的材料自己走進來；《痛點》這把尺，教你在接收到的一堆訊號裡，分出哪一個是真的有人願意付錢的需求。調準天線是上半場，聽懂哪個訊號能付房租，才是把點子做對的下半場。',
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
    ['name' => '創造力的修行', 'path' => '/lens/the-creative-act'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
