<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '想午餐吃什麼，跟想正事，花的是同一池腦力：用痛點之尺重讀《過載》｜痛點 P.A.I.N.',
  'desc'  => '神經科學家列維廷在《過載》裡證明：你的注意力與決策力是一池會見底的水，連「午餐吃什麼」這種小決定，都跟那筆攸關幾十萬的判斷舀同一池。用痛點的眼光重讀：你最貴的預算不在銀行、在你兩耳之間，而你花得很兇，只因從沒人寄帳單給你；今晚先關掉一個每天重複煩的小決定，把省下的腦力，留給真正值得的那一刷。',
  'path'  => '/lens/the-organized-mind',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《過載》',
  'heading'   => '想午餐吃什麼，跟想正事，花的是同一池腦力',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-organized-mind.html',
  'book'      => ['name' => '過載', 'author' => 'Daniel Levitin（丹尼爾・列維廷）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你今天最重要的那個決定，輪到它時你還剩多少腦力？',
    'body'    => '把一個每天重複煩的小決定寫死成規則，省下的那幾勺腦力，留給當天真正該想清楚的那一件事。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '過載',      'path' => '/lens/the-organized-mind'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
