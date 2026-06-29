<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒人看的時候，他才開始說實話：用痛點之尺重讀《數據、謊言與真相》｜痛點 P.A.I.N.',
  'desc'  => '《數據、謊言與真相》發現：人對民調說謊，卻對 Google 搜尋框誠實，真話只在沒人盯著時才打得出來。用痛點的眼光重讀——你最想問的「我這點子行不行」，正是最拿不到實話的一題；別再問人會不會買，去找你想服務的那群人沒打算給你看的那幾行字。',
  'path'  => '/lens/everybody-lies',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《數據、謊言與真相》',
  'heading'   => '沒人看的時候，他才開始說實話',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/everybody-lies.html',
  'book'      => ['name' => '數據、謊言與真相（Everybody Lies：Big Data, New Data, and What the Internet Can Tell Us About Who We Really Are）', 'author' => 'Seth Stephens-Davidowitz（賽斯・史蒂芬斯-大衛德維茲）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子行不行，問來的答案都先灌了水',
    'body'    => '《數據、謊言與真相》證明：人對問卷說謊，對搜尋框誠實。真要驗一個點子，別再問人會不會買，去看你想服務的那群人，沒人盯著時為這件事忍了什麼、花了什麼。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '數據、謊言與真相', 'path' => '/lens/everybody-lies'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
