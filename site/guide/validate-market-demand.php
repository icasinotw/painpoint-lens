<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '怎麼知道有沒有人要?三種免費查到的市場需求證據｜痛點之尺',
  'desc'  => '「會有人要嗎」不能用想的。市場需求會留下現成證據:有人在搜在問、有人在花錢買競品、有人土法煉鋼自己解。教你免費查出這三種需求訊號,並用預售讓陌生人原價掏錢做最硬的驗證,避開問卷裡的假需求。',
  'path'  => '/guide/validate-market-demand',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · 驗證需求',
  'heading'   => '怎麼知道有沒有人要(驗證市場需求)',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/validate-market-demand.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '查完證據,再把點子整體量一遍',
    'body'    => '需求訊號只是其中一格。把點子放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘看出你四格裡最弱、最該先補的是哪一塊。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/guide/find-real-pain-point', 'label' => '怎麼找到真正的痛點'],
  'next'      => ['url' => '/guide/customer-interview-questions', 'label' => '用戶訪談怎麼做?該問的問題清單'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '怎麼知道有沒有人要', 'path' => '/guide/validate-market-demand'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
