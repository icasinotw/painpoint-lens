<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '無私的好人，為什麼會被自己的善意拖垮？用痛點之尺拆《給予》｜痛點 P.A.I.N.',
  'desc'  => '《給予》發現成功階梯的最底層與最頂層都是給予者，差別在「無私」與「他者導向」。用《痛點》的需求驗證之尺重看：他者導向的給予者，其實在替每一份善意驗貨——先確認有人真的在痛，再決定要不要押下去。',
  'path'  => '/lens/give-and-take',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《給予》',
  'heading'   => '把善意全押之前，先替它驗一次貨',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/give-and-take.html',
  'book'      => ['name' => '給予：華頓商學院最啟發人心的一堂課', 'author' => 'Adam Grant 亞當·格蘭特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的下一個「好啊沒問題」，驗過貨了嗎？',
    'body'    => '《給予》告訴你精明的好人站在頂端；《痛點》這把尺，教你怎麼驗貨——先確認對面那個人是真的在痛。現在就免費體檢一個點子，練一遍「先驗再押」的手感；或翻翻《痛點》電子書。',
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
    ['name' => '給予',      'path' => '/lens/give-and-take'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
