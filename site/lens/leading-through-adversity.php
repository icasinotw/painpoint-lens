<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '船被冰擠爛那天，薛克頓埋掉的是自己的原定計畫：用痛點之尺重讀《逆境領導》｜痛點 P.A.I.N.',
  'desc'  => '張敏敏的《逆境領導》拿薛克頓南極求生的哈佛個案當主軸，教你在資源見底時怎麼把團隊撐住。用痛點的眼光重讀：薛克頓真正的關鍵動作不是撐，是船一沉就親手把自己吹過牛的橫越計畫埋了——那其實是對「目標」本身，做了一次最果斷的需求驗證。逆境裡最貴的成本，是你捨不得認賠的那個漂亮計畫。',
  'path'  => '/lens/leading-through-adversity',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《逆境領導》',
  'heading'   => '船被冰擠爛那天，薛克頓埋掉的是自己的原定計畫',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/leading-through-adversity.html',
  'book'      => ['name' => '逆境領導（哈佛商學院經典個案，克服管理失靈，重塑思維，一流主管帶出高韌性一流團隊）', 'author' => '張敏敏'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你逆境裡那艘船，是哪一個你捨不得認賠的計畫',
    'body'    => '別急著問怎麼把團隊撐住；先誠實寫下你正咬著牙在拚的那個目標，再問一次：拿掉面子和沉沒成本，眼前的現實此刻真正需要你交出來的，是不是同一件事。',
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
    ['name' => '逆境領導', 'path' => '/lens/leading-through-adversity'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
