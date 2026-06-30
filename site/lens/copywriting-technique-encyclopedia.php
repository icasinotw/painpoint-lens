<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '再寫就大賣的文案聖經｜痛點 P.A.I.N.',
  'desc'  => '《一寫就大賣的文案聖經》把文案從才華改判成可打分的手藝，PASONA、標題評分樣樣到位。用 P.A.I.N. 補上它跳過的那一格：再強的文案也只是乘數，需求是零，乘出來還是零。先確認麥克風前面有人，再學怎麼說。',
  'path'  => '/lens/copywriting-technique-encyclopedia',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一寫就大賣的文案聖經》',
  'heading'   => '再強的文案，乘上一個零還是零',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/copywriting-technique-encyclopedia.html',
  'book'      => ['name' => '一寫就大賣的文案聖經', 'author' => '神田昌典、衣田順一'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '麥克風前面，到底有沒有人？',
    'body'    => '《一寫就大賣的文案聖經》幫你把話說到精準；在那之前，先花五分鐘確認那群人真的存在。免費體檢一個點子，看看你最弱的是哪一軸。',
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
    ['name' => '一寫就大賣的文案聖經', 'path' => '/lens/copywriting-technique-encyclopedia'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
