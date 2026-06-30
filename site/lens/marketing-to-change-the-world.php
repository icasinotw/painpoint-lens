<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '行銷是擴音器，不會告訴你台下有沒有人：用痛點之尺重讀《用行銷改變世界》｜痛點 P.A.I.N.',
  'desc'  => '許子謙、米卡的《用行銷改變世界》把「怎麼讓世界聽見你」寫得又熱又實在。用痛點的眼光重讀：行銷是擴音器，它忠實放大你餵給它的東西——按下放大鍵之前，先確認被放大的那個東西，底下真的有人在痛、痛到肯付錢。',
  'path'  => '/lens/marketing-to-change-the-world',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《用行銷改變世界》',
  'heading'   => '行銷是擴音器，不會告訴你台下有沒有人',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/marketing-to-change-the-world.html',
  'book'      => ['name' => '用行銷改變世界', 'author' => '許子謙、米卡'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正要放大的那個東西，有人要嗎？',
    'body'    => '《用行銷改變世界》教你把聲音放到最大；放大之前，先花五分鐘確認被放大的那個點子站不站得住，畫出你最弱的那一軸。',
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
    ['name' => '用行銷改變世界', 'path' => '/lens/marketing-to-change-the-world'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
