<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先確認有人真的想跟，再談怎麼帶人：用痛點之尺重讀《成為讓部屬願意追隨的上司》｜痛點 P.A.I.N.',
  'desc'  => '岩田松雄說，部屬跟不跟你，看的不是你坐上哪個位子，是你能不能給他一個值得跟的「為了什麼」。用痛點的眼光重讀：頭銜不等於追隨，就像做出產品不等於有人買——追隨是要先確認、再一點一點掙來的東西。',
  'path'  => '/lens/a-boss-worth-following',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《成為讓部屬願意追隨的上司》',
  'heading'   => '先確認有人真的想跟，再談怎麼帶人',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/a-boss-worth-following.html',
  'book'      => ['name' => '成為讓部屬願意追隨的上司', 'author' => '岩田松雄'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把「為了什麼」想清楚，人才跟得動',
    'body'    => '岩田松雄要你先回答「這支團隊為了什麼存在」，再談帶人；痛點這把尺，把同一個問題用在你自己身上——你憑什麼認定坐上位子就有人真心跟。',
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
    ['name' => '成為讓部屬願意追隨的上司', 'path' => '/lens/a-boss-worth-following'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
