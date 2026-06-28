<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他遞給你一盞燈，陪你走過那段最黑的中場，卻沒先確認另一頭有沒有人｜痛點 P.A.I.N.',
  'desc'  => '貝爾斯基《混亂的中程》把創業最難熬的中場拆得又細又誠實——低潮怎麼撐、團隊怎麼帶、產品怎麼磨。用痛點之尺重讀：它教你熬過中場，卻沒先幫你確認另一頭有沒有人在等，「撐住很正常」反而成了沒人要的點子最體面的續命卡。',
  'path'  => '/lens/the-messy-middle',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《混亂的中程》',
  'heading'   => '有些隧道，你埋頭走完才發現沒有出口',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-messy-middle.html',
  'book'      => ['name' => '混亂的中程', 'author' => 'Scott Belsky 史考特・貝爾斯基'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那條隧道的另一頭，真的有人在等嗎？',
    'body'    => '《混亂的中程》教你把中場熬到底，卻沒教你在動手之前先確認另一頭有沒有人要。花五分鐘，替你的點子找出最虛的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '混亂的中程',     'path' => '/lens/the-messy-middle'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
