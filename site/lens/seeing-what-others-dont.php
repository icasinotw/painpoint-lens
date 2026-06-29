<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你順手解釋掉的那個怪，藏著你不想看的答案：用痛點之尺重讀《為什麼他能看到你沒看到的？》｜痛點 P.A.I.N.',
  'desc'  => '蓋瑞・克萊恩研究了一百多個洞見的真實案例，發現看見別人沒看見的，常常只是沒把一個「不對勁」放過。用痛點的眼光重讀《為什麼他能看到你沒看到的？》：抱著點子的你，最擅長放過的，剛好是那個會告訴你「沒人真的在痛」的矛盾。',
  'path'  => '/lens/seeing-what-others-dont',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《為什麼他能看到你沒看到的？》',
  'heading'   => '你順手解釋掉的那個怪，藏著你不想看的答案',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/seeing-what-others-dont.html',
  'book'      => ['name' => '為什麼他能看到你沒看到的？', 'author' => 'Gary Klein（蓋瑞・克萊恩）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在替哪一個皺眉，急著寫好藉口？',
    'body'    => '克萊恩教你別把「不對勁」順手放過；在你說服自己「他只是不是目標客群」以前，先把那個讓你皺眉的反應，留在桌上多看一天。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                       'path' => '/'],
    ['name' => '痛點之尺',                    'path' => '/lens'],
    ['name' => '為什麼他能看到你沒看到的？',    'path' => '/lens/seeing-what-others-dont'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
