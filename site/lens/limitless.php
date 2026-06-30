<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《腦力全開》｜痛點 P.A.I.N.',
  'desc'  => '《腦力全開》教你把學習速度練到極致，卻沒逼你先回答「這東西值不值得學」。用痛點的眼光重讀：把「有沒有人要」這把尺對準自己的學習清單，先確認你要全速去學的那樣東西，你的人生真的在等它。',
  'path'  => '/lens/limitless',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《腦力全開》',
  'heading'   => '腦力全開之前，先決定要開去哪',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/limitless.html',
  'book'      => ['name' => '腦力全開（Limitless）', 'author' => 'Jim Kwik 吉姆・快克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正準備全速學的那樣東西，生活在等它嗎',
    'body'    => '把腦力開到全開之前，先回答一件事：你現在的日子裡，有哪一件事正因為你不會某樣東西而卡著、在偷走你的時間？答得出來，再決定要把這身加速用在哪一格。',
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
    ['name' => '腦力全開',  'path' => '/lens/limitless'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
