<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '繞著你那個點子鼓掌的人，鼓的是你：用痛點之尺重讀《引爆會員經濟》｜痛點 P.A.I.N.',
  'desc'  => '《引爆會員經濟》教你把顧客養成會替你傳教的「超級用戶」。用痛點之尺重讀巴克斯特這本會員經濟經典——你那個點子早就有一票死忠，只是他們鼓掌是衝著你這個人；真正會為那個東西本身去說服一個陌生人的會員，你到今天還一個都沒有。',
  'path'  => '/lens/the-membership-economy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《引爆會員經濟》',
  'heading'   => '繞著你那個點子鼓掌的，鼓的是你這個人',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-membership-economy.html',
  'book'      => ['name' => '引爆會員經濟（The Membership Economy: Find Your Super Users, Master the Forever Transaction, and Build Recurring Revenue）', 'author' => 'Robbie Kellman Baxter 蘿比・凱爾曼・巴克斯特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子的掌聲，分得出是給它的，還是給你的嗎？',
    'body'    => '巴克斯特教你把人養成會替東西去傳教的超級用戶；在你享受掌聲之前，先弄清楚那掌聲到底是給那個東西的，還是只是給你這個人的。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '引爆會員經濟',    'path' => '/lens/the-membership-economy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
