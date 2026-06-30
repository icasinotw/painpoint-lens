<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他從一個顧客拆出整門生意，你得先有那一個：用痛點之尺重讀《讓大眾小眾都買單的單一顧客分析法》｜痛點 P.A.I.N.',
  'desc'  => '西口一希的 N1 分析很神：把一個真實顧客挖到見骨，從一個人長出整門生意。用痛點之尺重讀：這套機器要先有顧客才跑得動——你連半個客人都還沒有時，得先確認外面真有一個人正為這件事掏錢。',
  'path'  => '/lens/single-customer-analysis',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《讓大眾小眾都買單的單一顧客分析法》',
  'heading'   => '他從一個顧客拆出整門生意，你得先有那一個',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/single-customer-analysis.html',
  'book'      => ['name' => '讓大眾小眾都買單的單一顧客分析法', 'author' => 'Kazuki Nishiguchi 西口一希'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在分析那一個顧客之前，先確認你真的有一個',
    'body'    => '西口一希教你把一個真實顧客挖到見骨；痛點之尺幫你確認那個人不是你自己想出來的。花五分鐘免費體檢一個點子，看看外面到底有沒有一個人，正為這件事掏錢。',
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
    ['name' => '單一顧客分析法', 'path' => '/lens/single-customer-analysis'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
