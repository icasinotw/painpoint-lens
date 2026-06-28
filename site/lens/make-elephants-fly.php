<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '飛起來的大象，得有人在地上仰頭等牠：用痛點之尺拆《讓大象飛》｜痛點 P.A.I.N.',
  'desc'  => '《讓大象飛》把激進創新拆成一套可學的流程，連大公司這頭大象都能起飛。用痛點的眼光重讀：大象飛得多漂亮不是重點，天上有沒有人要牠才是——先確認你那個大膽點子底下真有人在痛，再教牠飛。',
  'path'  => '/lens/make-elephants-fly',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《讓大象飛》',
  'heading'   => '飛起來的大象，得有人在地上仰頭等牠',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/make-elephants-fly.html',
  'book'      => ['name' => '讓大象飛（Make Elephants Fly）', 'author' => 'Steven S. Hoffman 史蒂文・霍夫曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個大膽點子正等著起飛？',
    'body'    => '《讓大象飛》給你讓大象離地的勇氣和方法；《痛點》這把尺，幫你在起飛前先確認天上真的有人在等牠。花五分鐘免費體檢一個點子，看出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '讓大象飛',    'path' => '/lens/make-elephants-fly'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
