<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '品類之王吃掉八成市場，靠的是一個真的痛：用痛點之尺重讀《吃掉80%市場的稱霸策略》｜痛點 P.A.I.N.',
  'desc'  => '《吃掉80%市場的稱霸策略》教你別擠進別人的市場，自己命名一個新品類，當吃下八成市場的「品類之王」。用痛點的眼光重讀：它整套本事都在教你怎麼稱霸，卻預設你要命名的那個痛，本來就真的有人在痛——那一格，它沒逼你先驗。',
  'path'  => '/lens/play-bigger',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《吃掉80%市場的稱霸策略》',
  'heading'   => '品類之王吃掉八成市場，靠的是一個真的痛',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/play-bigger.html',
  'book'      => ['name' => '吃掉80%市場的稱霸策略', 'author' => 'Al Ramadan 艾爾・拉馬丹、Dave Peterson 戴夫・彼得森、Christopher Lochhead 克里斯多福・拉克海德、Kevin Maney 凱文・梅尼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你想開創的那個新品類，底下真的有人在痛嗎？',
    'body'    => '這本書教你怎麼命名一個市場、當上品類之王；動手想名字之前，先用痛點這把尺確認一件事——那個問題，已經有人痛到願意掏錢了嗎。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '吃掉80%市場的稱霸策略', 'path' => '/lens/play-bigger'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
