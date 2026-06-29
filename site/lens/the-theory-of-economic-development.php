<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒有人會跟你預訂一條還不存在的鐵路：用痛點之尺重讀《經濟發展理論》｜痛點 P.A.I.N.',
  'desc'  => '熊彼得在《經濟發展理論》說，推著經濟走的是生產者——你不會挨家挨戶問人要不要一條鐵路。用痛點之尺重讀：這句話成了太多人跳過需求驗證的免死金牌，但真正的鐵路一個世紀沒幾條，你手上那個，先假設它只是塗了新漆的馬車，回頭去找那一村早就在繞路、多花錢的人。',
  'path'  => '/lens/the-theory-of-economic-development',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《經濟發展理論》',
  'heading'   => '沒有人會跟你預訂一條還不存在的鐵路',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-theory-of-economic-development.html',
  'book'      => ['name' => '經濟發展理論（The Theory of Economic Development）', 'author' => 'Joseph Schumpeter 約瑟夫・熊彼得'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你蓋的是鐵路，還是塗了漆的馬車？',
    'body'    => '熊彼得說真正的鐵路問不出來——但一條真鐵路身後，一定拖著一整村人繞舊問題、多掏的冤枉錢。動手前先去翻那筆代價：找得到，你大概真踩在痛上；找不到，趁油漆沒乾還能改。',
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
    ['name' => '經濟發展理論', 'path' => '/lens/the-theory-of-economic-development'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
