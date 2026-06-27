<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '畫得出商業模式，不等於有人要買：用痛點之尺重讀《獲利世代》｜痛點 P.A.I.N.',
  'desc'  => '《獲利世代》把商業模式變成一張九宮格畫布，但畫得出來不等於有人要買。用 P.A.I.N. 四問補上畫布沒驗證的那一格：誰在痛、痛多深、你怎麼介入、數字成不成立。',
  'path'  => '/lens/business-model-generation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《獲利世代》',
  'heading'   => '畫得出商業模式，不等於有人要買',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/business-model-generation.html',
  'book'      => ['name' => '獲利世代：自己動手，畫出你的商業模式', 'author' => 'Alexander Osterwalder、Yves Pigneur'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你自己的點子，站不站得住？',
    'body'    => '《獲利世代》教你把生意畫清楚；《痛點》這把尺，幫你驗證有沒有人要。現在就免費體檢一個點子，五分鐘畫出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '獲利世代',  'path' => '/lens/business-model-generation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
