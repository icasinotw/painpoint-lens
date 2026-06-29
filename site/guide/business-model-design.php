<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '商業模式怎麼設計?先回答四個會決定生死的問題｜痛點之尺',
  'desc'  => '商業模式不是把九宮格填滿,是回答一句話:誰、為了解決什麼痛、願意付你多少、又為什麼是你。教你別在沒驗過的痛上設計精巧收費,先把地基驗了,再用三個問題與「邊做邊驗」把模式長出來。',
  'path'  => '/guide/business-model-design',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · 商業模式',
  'heading'   => '商業模式怎麼設計',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/business-model-design.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '模式的地基,是「真的有人在痛」',
    'body'    => '商業模式再精巧,也撐在「有人要」這格上。把點子放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘看出你的地基穩不穩。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/guide/what-to-validate-before-mvp', 'label' => '做 MVP 之前,要先驗證什麼?'],
  'next'      => ['url' => '/guide/pricing-strategy', 'label' => '定價怎麼定?'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '商業模式怎麼設計', 'path' => '/guide/business-model-design'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
