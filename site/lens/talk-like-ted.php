<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你講得越好，越難發現沒人要聽你講的事：用痛點之尺重讀《跟TED學表達》｜痛點 P.A.I.N.',
  'desc'  => '卡曼・蓋洛把上百場最多人看的TED演講，逆向工程成九個祕訣，教你把任何想法講到讓全場記住。用痛點的眼光重讀：這九招是一台擴音器，放大訊息很在行，卻不負責回頭確認，台下那群人是不是本來就在等著聽。',
  'path'  => '/lens/talk-like-ted',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《跟TED學表達》',
  'heading'   => '你講得越好，越難發現沒人要聽你講的事',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/talk-like-ted.html',
  'book'      => ['name' => '跟TED學表達，讓世界記住你', 'author' => 'Carmine Gallo（卡曼・蓋洛）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最想講的那件事，台下本來就有人在等嗎？',
    'body'    => '把投影片先合上，做一件跟蓋洛教的相反的事：別急著想怎麼講得動人，先確認在你開口以前，是不是真有人為這件事困擾過。確認了，再回頭把九招練到底。',
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
    ['name' => '跟TED學表達',   'path' => '/lens/talk-like-ted'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
