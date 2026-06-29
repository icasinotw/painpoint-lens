<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '中國人不敢先付錢，他就替雙方扣著那筆錢：用痛點之尺重讀《阿里巴巴》｜痛點 P.A.I.N.',
  'desc'  => '克拉克寫馬雲怎麼從杭州一間公寓，長成碰得到十三億人的阿里巴巴。最關鍵那一步，是支付寶替不敢付錢給陌生人的中國人，先把錢扣著。用痛點的眼光重讀：eBay 錢更多、技術更好還是被趕出中國——因為勝負不在誰的產品漂亮，在誰把顧客那道過不去的坎填平。',
  'path'  => '/lens/alibaba-the-house-that-jack-ma-built',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《阿里巴巴》',
  'heading'   => '中國人不敢先付錢，他就替雙方扣著那筆錢',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/alibaba-the-house-that-jack-ma-built.html',
  'book'      => ['name' => '阿里巴巴：物流、電商、雙11，馬雲改變13億人的生活方式', 'author' => 'Duncan Clark（鄧肯・克拉克）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的顧客，正卡在哪一道坎上？',
    'body'    => '阿里巴巴的帝國，是從填平一道「不敢付錢給陌生人」的坎長出來的。想清楚你最近一個差點成交、最後卻縮手的顧客，他到底卡在哪一秒。',
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
    ['name' => '阿里巴巴',  'path' => '/lens/alibaba-the-house-that-jack-ma-built'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
