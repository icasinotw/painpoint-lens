<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你對人的假設，替你設計了每一樣東西：用痛點之尺重讀《人慈》｜痛點 P.A.I.N.',
  'desc'  => '布雷格曼在《人慈》裡把「人性本惡」的著名證據一件件翻開查——史丹佛監獄實驗裡的殘暴，其實是主持人在旁邊教出來的。用痛點的眼光重讀：你對「人會偷懶、會佔便宜」的假設，也是一份沒驗過就照單全收的漂亮劇本，而它正悄悄替你設計掉每一道關卡、每一條規則。這禮拜，挑一個機制去對一次真人。',
  'path'  => '/lens/humankind',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《人慈》',
  'heading'   => '你對人的假設，替你設計了每一樣東西',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/humankind.html',
  'book'      => ['name' => '人慈', 'author' => 'Rutger Bregman（羅格・布雷格曼）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上哪一道關卡，其實是在防一個想像出來的壞人？',
    'body'    => '挑一個「純粹為了防某種人才存在」的規則或流程，這禮拜去找三個真正的用戶或同事對一次，看看你花最大力氣防的那種人，到底多常出現。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '人慈',        'path' => '/lens/humankind'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
