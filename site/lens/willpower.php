<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '意志力是一缸燒得完的油，你每做一個決定，它就少一格｜痛點 P.A.I.N.',
  'desc'  => '鮑梅斯特《增強你的意志力》說，自律是一缸全身共用、會見底的油，每個決定都在偷喝它。用痛點之尺重讀：油見底時，你會自動退回最省力的「再做一個功能」，把整缸燒在沒人驗過的點子上；真正貴、卻最該搶先做的，是趁油還滿時走出門，問一個陌生人要不要。',
  'path'  => '/lens/willpower',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《增強你的意志力》',
  'heading'   => '意志力是一缸燒得完的油，你每做一個決定，它就少一格',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/willpower.html',
  'book'      => ['name' => '增強你的意志力（Willpower）', 'author' => 'Roy Baumeister 羅伊・鮑梅斯特、John Tierney 約翰・堤爾尼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那缸油，正燒在「把產品做完」上，還是燒在「確認有沒有人要」上？',
    'body'    => '鮑梅斯特教你看懂自律為什麼會見底；《痛點》這把尺，幫你揪出此刻你那缸油，是不是天天澆在一個還沒人驗過的點子上。現在就免費體檢一個點子，五分鐘看清你最篤定的那句「一定有人要」，是查證過的，還是你自己腦補出來、捨不得去撞的。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/read/pain-framework', 'label' => '先認識 P.A.I.N. 這把尺'],
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
    ['name' => '增強你的意志力',  'path' => '/lens/willpower'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
