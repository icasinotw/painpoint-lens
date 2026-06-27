<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的客戶早就雇了一個爛東西，在替他做這件事：用痛點之尺重讀《創新者的解答》｜痛點 P.A.I.N.',
  'desc'  => '《創新者的解答》最值錢的一把鏡頭叫「待完成的工作」：顧客雇一個東西去替他做完一件事，那杯奶昔是通勤族雇來陪自己塞車的。用痛點之尺往前推一步——一件工作是真是假，看現在有沒有真人正用爛方法替它撐著、還為它掏錢。',
  'path'  => '/lens/innovators-solution',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創新者的解答》',
  'heading'   => '你的客戶早就雇了一個爛東西，在替他做這件事',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/innovators-solution.html',
  'book'      => ['name' => '創新者的解答', 'author' => 'Clayton Christensen 克里斯汀生、Michael Raynor 雷諾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那件「工作」，是真痛還是你自己掰的？',
    'body'    => '《創新者的解答》給你一把找「待完成的工作」最利的鏡頭；《痛點》這把尺，幫你驗那件工作現在有沒有真人正花著錢、將就著做。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '創新者的解答',  'path' => '/lens/innovators-solution'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
