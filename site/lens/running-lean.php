<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '照精實的方法，你也能做出沒人要的東西：用痛點之尺重讀《精實執行》｜痛點 P.A.I.N.',
  'desc'  => '莫瑞亞的《精實執行》給你最操作化的精實畫布與驗證流程，卻裝不進「想知道真相」那個開關。用痛點的眼光重讀：照精實的方法，照樣能勤奮地做出沒人要的東西；真正過得了關的證據只有一種——有人為它先付出了代價。',
  'path'  => '/lens/running-lean',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精實執行》',
  'heading'   => '照精實的方法，你也能花兩年做出一個沒人要的東西',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/running-lean.html',
  'book'      => ['name' => '精實執行：精實創業教戰手冊', 'author' => 'Ash Maurya 艾許・莫瑞亞'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那格「地基假設」，驗過有沒有人肯為它付代價了嗎？',
    'body'    => '莫瑞亞給了你最趁手的精實畫布，剩下那一哩——肯不肯拿最寶貝的假設，去撞一個可能說「不」的真人——得你自己走。《痛點》這把尺，幫你在動手做之前，先看出最沒被代價驗過的那一軸。現在就免費體檢一個點子，五分鐘看出最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '精實執行',  'path' => '/lens/running-lean'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
