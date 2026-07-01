<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你抄的那套成功劇本，刪掉了引擎那一段：用痛點之尺重讀《棉花帝國》｜痛點 P.A.I.N.',
  'desc'  => '貝克特用一條棉線，把曼徹斯特的工廠、密西西比的奴隸、印度的棉農綁成同一部機器。教科書把棉花帝國寫成技術與自由市場的勝利，他把被擦掉的那半段補回來：真正的引擎是奴役、掠奪與國家的拳頭——戰爭資本主義。用痛點的眼光重讀：你照著抄的成功樣本，早被講述者擦乾淨了；去挖那台不在故事裡的引擎，別學它擦乾淨的表面。',
  'path'  => '/lens/empire-of-cotton',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《棉花帝國》',
  'heading'   => '你抄的那套成功劇本，刪掉了引擎那一段',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/empire-of-cotton.html',
  'book'      => ['name' => '棉花帝國(Empire of Cotton: A Global History)', 'author' => 'Sven Beckert(斯溫・貝克特)'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個「照著成功樣本抄」的點子，撐得住嗎？',
    'body'    => '你想複製的那個成功故事，早被講述者擦乾淨了。把你手上的點子攤開來，看它扣掉那套漂亮說法之後，還剩多少真的痛、多少人正在為它付錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '棉花帝國',    'path' => '/lens/empire-of-cotton'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
