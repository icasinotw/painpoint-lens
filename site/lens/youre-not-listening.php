<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最危險的客戶，是你自以為最懂的那個：用痛點之尺重讀《你都沒在聽》｜痛點 P.A.I.N.',
  'desc'  => '凱特・墨菲《你都沒在聽》點出「越熟越不會聽」的親密溝通偏誤。用 P.A.I.N. 的眼光重讀：你最篤定摸透的那群客戶，往往是你最久沒認真聽過的一群；三年前量到的痛，早就過期了。',
  'path'  => '/lens/youre-not-listening',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《你都沒在聽》',
  'heading'   => '最危險的客戶，是你自以為最懂的那個',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/youre-not-listening.html',
  'book'      => ['name' => '你都沒在聽：科技讓交流更容易，人卻愈來愈不會聆聽', 'author' => 'Kate Murphy 凱特・墨菲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你上一次真的坐下來聽你的市場，是什麼時候？',
    'body'    => '《你都沒在聽》教你在最熟的關係裡重新張開耳朵；搬到生意上，就是別讓「我早就懂客戶」變成你停止驗證的藉口。',
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
    ['name' => '你都沒在聽',  'path' => '/lens/youre-not-listening'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
