<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '《引爆瘋潮》拆書：那句「一定有人要」，是你在自己腦子裡單曲循環三千遍的回音｜痛點 P.A.I.N.',
  'desc'  => '湯普森《引爆瘋潮》證明沒有天生的暢銷品，紅不紅泰半是被看見的次數堆出來的。用痛點之尺重讀：這台「看夠多就愛上」的機器，你早開在自己身上——那個點子在腦裡播了三千遍，「一定有人要」才像鐵一般的事實；可那份篤定來自播放次數，不是任何一個聽過零遍的陌生人。',
  'path'  => '/lens/hit-makers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《引爆瘋潮》',
  'heading'   => '同一首歌，電台替你播三十遍，你就會跟著哼；你那個點子，在自己腦子裡已經播了三千遍——那句「一定有人要」，是你自製的一首暢銷曲，全場只坐著你一個聽眾，你卻把它當成了整個市場的點歌',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/hit-makers.html',
  'book'      => ['name' => '引爆瘋潮', 'author' => 'Derek Thompson 德瑞克・湯普森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，是市場的點歌，還是你自己單曲循環三千遍的回音？',
    'body'    => '這禮拜，把你最得意的那個點子連同一個真實價格，端到一個從沒聽你提過的陌生人面前——讓他掏不掏錢，替你借來一對你自己給不了的、聽過零遍的耳朵。',
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
    ['name' => '引爆瘋潮',  'path' => '/lens/hit-makers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
