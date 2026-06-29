<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《你的專屬魅力說明書》｜痛點 P.A.I.N.',
  'desc'  => '莎莉・霍格茲海德的魅力優勢測驗，量的不是你怎麼看自己，是別人怎麼接收你。用痛點的眼光重讀：這是在教你對自己做需求驗證，卻只驗了「你被怎麼看」，沒驗「有沒有人為這個你掏錢」——被欣賞和被買單，中間還隔著一個錢包。',
  'path'  => '/lens/how-the-world-sees-you',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《你的專屬魅力說明書》',
  'heading'   => '你被看見的樣子，離有人買單還隔著一條街',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/how-the-world-sees-you.html',
  'book'      => ['name' => '你的專屬魅力說明書（How the World Sees You）', 'author' => '莎莉・霍格茲海德（Sally Hogshead）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你以為的賣點，別人未必在買',
    'body'    => '霍格茲海德幫你看清自己在別人眼裡是哪一款；但光是被看見，生不出有人願意買單。下次端出你的「不一樣」之前，先找一個真人，看他掏不掏。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                     'path' => '/'],
    ['name' => '痛點之尺',                  'path' => '/lens'],
    ['name' => '你的專屬魅力說明書',         'path' => '/lens/how-the-world-sees-you'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
