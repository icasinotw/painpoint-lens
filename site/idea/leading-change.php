<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '轟轟烈烈宣布轉型，半年後為什麼不了了之｜經典觀念',
  'desc'  => '公司盛大宣布數位轉型,喊得震天價響,半年後卻不了了之。哈佛商學院教授約翰・科特1995年在《哈佛商業評論》的經典〈Leading Change: Why Transformation Efforts Fail〉,歸納出變革失敗最常見的八個錯誤。用台灣在地例子帶你抓住其中最有感的五個,附今天就能自問的一句檢查句。',
  'path'  => '/idea/leading-change',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 約翰・科特',
  'heading'   => '轟轟烈烈宣布轉型，半年後為什麼不了了之',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/leading-change.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典,值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本,當你進門的橋。讀懂了觀念,更多用同一種眼光拆解的商業經典,都在拆書區等你。',
    'primary' => ['url' => '/lens', 'label' => '去看更多拆書'],
    'ghost'   => ['url' => '/idea', 'label' => '更多經典觀念'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '經典觀念',    'path' => '/idea'],
    ['name' => '領導變革',    'path' => '/idea/leading-change'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
