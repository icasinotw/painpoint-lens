<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '做 MVP 之前要先驗證什麼?先驗「有沒有人要」再動手｜痛點之尺',
  'desc'  => 'MVP 不是「偷工減料版的產品」,是用最小成本驗一個會決定生死的假設。動手前先照順序驗三層:有沒有人要(想要性)→ 做不做得出來(可行性)→ 划不划算(存續性)。多數人跳過第一層。教你不寫程式就驗想要性的方法。',
  'path'  => '/guide/what-to-validate-before-mvp',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · MVP 前',
  'heading'   => '做 MVP 之前,要先驗證什麼?',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/what-to-validate-before-mvp.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '動手之前,先確認第一層站不站得住',
    'body'    => '「有沒有人要」是 MVP 之前最該驗的一層。把點子放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘看出你的地基到底穩不穩。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/guide/validate-startup-idea', 'label' => '回看:如何驗證創業點子'],
  ],
  'prev'      => ['url' => '/guide/customer-interview-questions', 'label' => '用戶訪談怎麼做?該問的問題清單'],
  'next'      => ['url' => '/guide/business-model-design', 'label' => '商業模式怎麼設計'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '做 MVP 之前要先驗證什麼', 'path' => '/guide/what-to-validate-before-mvp'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
