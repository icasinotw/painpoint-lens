<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '兩姊妹分一顆橘子，切成兩半反而是最笨的分法：用痛點之尺重讀《哈佛這樣教談判力》',
  'desc'  => '《哈佛這樣教談判力》教你別在立場上拔河，蹲下去挖底下的利益。用 P.A.I.N. 之尺重讀：客戶嘴上那句「我想要」也是立場，照著做就像把橘子切成兩半——他真正在痛的那層皮，你還沒問出口。',
  'path'  => '/lens/getting-to-yes',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《哈佛這樣教談判力》',
  'heading'   => '兩姊妹分一顆橘子，切成兩半反而是最笨的分法',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/getting-to-yes.html',
  'book'      => ['name' => '哈佛這樣教談判力', 'author' => 'Roger Fisher、William Ury'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那句「客戶一定想要」，是立場還是利益？',
    'body'    => '《哈佛這樣教談判力》教你把對方的立場挖到底下的利益。同一把鏟子，也能挖你自己那個還沒問過半個人的點子——五分鐘，把它最弱的一格戳出來。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '哈佛這樣教談判力',  'path' => '/lens/getting-to-yes'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
