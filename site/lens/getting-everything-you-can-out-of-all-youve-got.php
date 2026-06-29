<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '世界級的採礦隊，開進一座沒有礦的山：用痛點之尺重讀《行銷天才思考聖經》｜痛點 P.A.I.N.',
  'desc'  => '傑・亞伯拉罕《行銷天才思考聖經》教你把現有生意的隱藏資產全部挖出來，開採工法世界級。用 P.A.I.N. 補上他整本跳過的一步：開挖前先探勘——你腳下這座山，到底有沒有人真的在痛、在掏錢。',
  'path'  => '/lens/getting-everything-you-can-out-of-all-youve-got',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《行銷天才思考聖經》',
  'heading'   => '世界級的採礦隊，開進一座沒有礦的山',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/getting-everything-you-can-out-of-all-youve-got.html',
  'book'      => ['name' => '行銷天才思考聖經（修訂版）', 'author' => 'Jay Abraham 傑・亞伯拉罕'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上這門生意，是挖得不夠深，還是根本沒礦？',
    'body'    => '亞伯拉罕教你把現有生意挖到見底；在請整支採礦隊進場前，先花五分鐘替你的點子取一管岩心，看這個痛撐不撐得起一門生意。',
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
    ['name' => '行銷天才思考聖經', 'path' => '/lens/getting-everything-you-can-out-of-all-youve-got'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
