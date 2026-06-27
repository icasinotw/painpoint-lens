<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「再打磨一下」，常常是你不敢去問：用痛點之尺拆《心態致勝》｜痛點 P.A.I.N.',
  'desc'  => '創業圈都會背「動手前先去驗證」，真正去做的卻沒幾個。杜維克《心態致勝》說中了原因：你怕一驗就證明點子沒人要、自己看走眼，於是用「再打磨一下」拖著。用痛點的尺重讀，把「還沒準備好」翻成「還沒問過半個真人」，今晚就去問一個。',
  'path'  => '/lens/mindset',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《心態致勝》',
  'heading'   => '「再打磨一下」，常常是你不敢去問',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/mindset.html',
  'book'      => ['name' => '心態致勝（Mindset: The New Psychology of Success）', 'author' => 'Carol S. Dweck 卡蘿・杜維克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂自己在怕什麼之後，下一步是把點子拿去驗',
    'body'    => '《心態致勝》讓你看見那個一要驗證就喊停的聲音；《痛點》這把尺，幫你把心裡那個還沒驗過的點子，真的攤開來量一量，值不值得你把時間和錢押下去。現在就免費體檢一個點子，五分鐘看出你最該先出門驗的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '心態致勝',    'path' => '/lens/mindset'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
