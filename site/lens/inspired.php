<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '凱根把「有沒有人要」排第一，可他的驗法預設你早就有人可問：用痛點之尺重讀《矽谷最夯・產品專案管理全書》｜痛點 P.A.I.N.',
  'desc'  => '《矽谷最夯・產品專案管理全書》難得地把「價值風險—有沒有人要」排在所有風險的第一位，跟痛點站同一邊。但凱根那套驗法（原型測試、A／B、看數據）都要先有用戶、有流量。用痛點的眼光看：你手上只有一個點子時，還有一把更土的尺——一個真的為它掏錢的真人。',
  'path'  => '/lens/inspired',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《矽谷最夯・產品專案管理全書》',
  'heading'   => '他那套驗法，預設你早就有人可問',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/inspired.html',
  'book'      => ['name' => '矽谷最夯・產品專案管理全書：打造人人都喜歡的產品，讓公司賺大錢', 'author' => 'Marty Cagan 馬提・凱根'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，凱根的工具還測不了——但有一把尺現在就能用',
    'body'    => '《矽谷最夯・產品專案管理全書》教你把產品做到讓人愛上；《痛點》這把尺，幫你先確認外面真的有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '矽谷最夯・產品專案管理全書',  'path' => '/lens/inspired'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
