<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '門開著，請帖卻發給了一萬個人：用痛點之尺重讀《必然》｜痛點 P.A.I.N.',
  'desc'  => '凱文・凱利在《必然》裡丟出下一萬家新創的公式——拿一個現成的東西，加上 AI，又在結尾說你還沒遲到。用痛點的眼光看：這兩句都是真的，卻都只指了一個方向；而方向是這時代最不稀缺的東西，獨缺一個肯為你掏錢的真人。',
  'path'  => '/lens/the-inevitable',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《必然》',
  'heading'   => '凱利說「你還沒遲到」，門開著——只是同一張請帖，發給了一萬個人',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-inevitable.html',
  'book'      => ['name' => '必然：掌握形塑未來30年的12科技動能', 'author' => 'Kevin Kelly 凱文・凱利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「加上 AI」的點子，有人肯先付一塊錢嗎？',
    'body'    => '《必然》告訴你風往哪吹；《痛點》這把尺，幫你先確認風裡有沒有一個肯掏錢的人。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '必然',     'path' => '/lens/the-inevitable'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
