<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '它教你怎麼鑽進去，沒教你該不該鑽：用痛點之尺拆《深度工作力》｜痛點 P.A.I.N.',
  'desc'  => '紐波特的公式是「高品質產出 = 時間 × 專注強度」，《深度工作力》把專注強度磨到極致——但公式藏了第三個乘數：你鑽進去的那件事到底有沒有人要。用痛點的眼光重讀：燒掉你最貴的那桶燃料之前，先確認那個桶底下不是空的。',
  'path'  => '/lens/deep-work',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《深度工作力》',
  'heading'   => '它教你怎麼鑽進去，沒教你該不該鑽',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/deep-work.html',
  'book'      => ['name' => '深度工作力（Deep Work）', 'author' => 'Cal Newport 卡爾・紐波特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂怎麼鑽之後，先確認值不值得鑽',
    'body'    => '《深度工作力》讓你把專注力榨到極致；《痛點》這把尺，幫你在投入幾百個小時之前，先驗證那件事到底有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '深度工作力',    'path' => '/lens/deep-work'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
