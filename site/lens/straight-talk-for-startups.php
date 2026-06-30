<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '估值喊得越高，創辦人越可能先出局：用痛點之尺重讀《創業的100條潛規則》｜痛點 P.A.I.N.',
  'desc'  => '矽谷老手藍迪・高米沙把一百條沒人會在慶功宴上跟你說的創業規矩釘在紙上。用痛點的眼光重讀《創業的100條潛規則》：那套讓你別被產品劇本騙的警覺，到了募資桌上同樣管用——你最想聽到的那個高估值，往往是日後把你請出公司的那隻手。',
  'path'  => '/lens/straight-talk-for-startups',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《創業的100條潛規則》',
  'heading'   => '估值喊得越高，創辦人越可能先出局',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/straight-talk-for-startups.html',
  'book'      => ['name' => '創業的100條潛規則', 'author' => 'Randy Komisar（藍迪・高米沙）、Jantoon Reigersman'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你要碰錢之前，先確認最根本的一件事',
    'body'    => '高米沙教你怎麼把募來的錢和控制權守住；在那之前，痛點這把尺先幫你確認，這門生意到底有沒有人要。花五分鐘免費體檢，找出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '創業的100條潛規則',   'path' => '/lens/straight-talk-for-startups'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
