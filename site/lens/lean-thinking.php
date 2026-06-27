<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你把樓蓋得又高又精實，最底下那塊地卻沒人驗過｜痛點 P.A.I.N.',
  'desc'  => '《精實革命》立下精實五大原則，第一條就是「價值由客戶定義」。用痛點之尺重讀：沃馬克教你刮掉產線上每一克浪費，卻預設地基早驗過——而抱著點子的你，從沒讓真客戶驗過「到底有沒有人要」那塊撐著全部的地。',
  'path'  => '/lens/lean-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精實革命》',
  'heading'   => '你把那棟樓蓋得又高又精實，最底下那塊地，沒人去驗過撐不撐得住',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/lean-thinking.html',
  'book'      => ['name' => '精實革命：消除浪費、創造獲利的有效方法', 'author' => 'James Womack 詹姆斯・沃馬克、Daniel Jones 丹尼爾・瓊斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那棟樓的地基，到底有沒有人驗過？',
    'body'    => '《精實革命》教你把每一克浪費刮乾淨，卻預設地基早驗過、客戶早在了。花五分鐘，替你的點子驗一下最底下那塊地最虛的是哪一軸。',
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
    ['name' => '精實革命',  'path' => '/lens/lean-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
