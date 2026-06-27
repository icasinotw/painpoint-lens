<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '能做到，不等於有人要：用痛點之尺重讀《區塊鏈革命》｜痛點 P.A.I.N.',
  'desc'  => '《區塊鏈革命》把一項技術能做到什麼寫到淋漓盡致。用痛點之尺重讀：十年過去，書裡的宏大應用大半落空——技術早就做得到，缺的是一個被舊辦法整到受不了、肯掏錢的人。你手上的點子，可能也是一把還沒找到鎖孔的好鎖。',
  'path'  => '/lens/blockchain-revolution',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《區塊鏈革命》',
  'heading'   => '泰普史考特把那把鎖打磨到撬不開，十年過去，大半的門後面根本沒人在怕小偷',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/blockchain-revolution.html',
  'book'      => ['name' => '區塊鏈革命：比特幣技術如何影響貨幣、商業和世界運作', 'author' => 'Don Tapscott、Alex Tapscott'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，找到它的鎖孔了嗎？',
    'body'    => '《區塊鏈革命》示範了一份「能做到什麼」的清單；真正難的，是先找到一個正為這件事在痛、肯掏錢的真人。五分鐘，免費替你的點子量一次最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '區塊鏈革命',  'path' => '/lens/blockchain-revolution'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
