<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先有人肯為你的東西掏錢，才談得起改變世界：用痛點之尺重讀《開拓者》｜痛點 P.A.I.N.',
  'desc'  => 'Salesforce 創辦人貝尼奧夫在《開拓者》把「商業是改變世界最強的平台」講成一門生意——1-1-1 捐股權捐產品捐工時、把公司當家人。用痛點的眼光重讀：這套價值觀之所以撐得起來，是因為他更早以前先賣掉了一帖讓人離不開的解藥、先贏了。捐得出去的百分之一，是市場先掏錢發給他的。你的點子真正缺的不是理想，是先確認門外有沒有人正為這個痛掏錢——理想，得等戶頭裡有錢才花得出去。',
  'path'  => '/lens/trailblazer',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《開拓者》',
  'heading'   => '先有人肯為你的東西掏錢，才談得起改變世界',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/trailblazer.html',
  'book'      => ['name' => '開拓者（Trailblazer）', 'author' => '馬克・貝尼奧夫（Marc Benioff，與 Monica Langley 合著）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '寫使命宣言之前，先確認門外有人在痛',
    'body'    => '《開拓者》教你把事業當成改變世界的平台；痛點這把尺，幫你補上那個平台底下的地基——願意自己走過來、肯為這個痛掏錢的人，到底有沒有、夠不夠。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
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
    ['name' => '開拓者',    'path' => '/lens/trailblazer'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
