<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '問題出在根，你卻一直在修上面那一截：用痛點之尺重讀《打造將才基因》｜痛點 P.A.I.N.',
  'desc'  => '杜書伍在《打造將才基因》裡反覆只證明一句話：將才是打造出來的，而打造的起點不在技巧，在一個人腦袋裡那套最底層的「觀念」。用痛點的眼光重讀：你那個卡住的點子、那個帶不動的人，問題常常不在你拚命修的表面那一層；先往下挖到真正壞掉的根，再決定要不要繼續往上澆水。',
  'path'  => '/lens/building-the-general-gene',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《打造將才基因》',
  'heading'   => '問題出在根，你卻一直在修上面那一截',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/building-the-general-gene.html',
  'book'      => ['name' => '打造將才基因', 'author' => '杜書伍'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上最焦慮的那件事，真正壞掉的是哪一層？',
    'body'    => '挑一件你最近最放不下的事，往下追三層問「為什麼」。多數人會在第三層撞見一個自己一直假裝沒看到的東西——那一層，才是該動手的地方。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '打造將才基因',     'path' => '/lens/building-the-general-gene'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
