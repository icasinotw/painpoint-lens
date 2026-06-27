<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你這輩子最大的一把全押，押在一手還沒翻開的牌上：用痛點之尺重讀《高勝算決策》｜痛點 P.A.I.N.',
  'desc'  => '《高勝算決策》裡，安妮・杜克要你把每個決定當成一場賭注、替信念標出真實賠率。用痛點之尺重讀：你下過最大的一把全押，是腦中那句「一定有人要」——你喊著穩贏就推上接下來兩年，卻從沒讓一個會掏錢的陌生人，跟你對賭。',
  'path'  => '/lens/thinking-in-bets',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《高勝算決策》',
  'heading'   => '你這輩子最大的一把全押，押在一手還沒翻開的牌上',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/thinking-in-bets.html',
  'book'      => ['name' => '高勝算決策(Thinking in Bets)', 'author' => 'Annie Duke 安妮・杜克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，敢不敢拿去賭？',
    'body'    => '《高勝算決策》教你逼自己替每個信念標出真實賠率;《痛點》這把尺，幫你走出門，去找那個願意掏錢、替你開賠率的陌生人。先免費體檢一個點子，五分鐘看出你最沒驗過的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '高勝算決策',  'path' => '/lens/thinking-in-bets'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
