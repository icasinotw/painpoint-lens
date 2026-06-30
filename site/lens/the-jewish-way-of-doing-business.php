<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '藤田田只賣兩種東西，剩下的得你自己走出門問：用痛點之尺重讀《猶太商法》｜痛點 P.A.I.N.',
  'desc'  => '藤田田開日本第一家麥當勞前寫的《猶太商法》，把做生意縮成兩條口訣：只賣女人想要的、和會被吃進嘴裡的——先選會掏錢又會回頭的人，再找東西賣給他們。用痛點的眼光重讀：這條一九七二年的口訣替你選對了「哪一種人」，卻替不了你走出店門，去找出那幾個已經為這個痛掏過錢、會自己走過來的真人。一個會掏錢的活人，比一整類理論上該買的人重得多。',
  'path'  => '/lens/the-jewish-way-of-doing-business',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《猶太商法》',
  'heading'   => '藤田田只賣兩種東西，剩下的得你自己走出門問',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-jewish-way-of-doing-business.html',
  'book'      => ['name' => '猶太商法', 'author' => '藤田田（Den Fujita）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '口訣選對了人，門外的人還得你去數',
    'body'    => '藤田田教你選定「賣給誰」；痛點這把尺，幫你補上那條口訣量不到的一格——願意自己走過來、肯為這個痛掏過錢的真人，到底找不找得到、夠不夠。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
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
    ['name' => '猶太商法',    'path' => '/lens/the-jewish-way-of-doing-business'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
