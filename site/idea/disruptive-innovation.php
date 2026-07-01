<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '破壞式創新,為什麼好公司會被爛東西幹掉｜經典觀念',
  'desc'  => '曾經稱霸的大公司,常敗給一個看起來很爛的小東西——問題不在它做錯,在它太理性。哈佛的鮑爾與克里斯汀生1995年經典〈Disruptive Technologies: Catching the Wave〉,用台灣在地例子帶你看懂:破壞式創新怎麼從低階市場切入、為什麼聽最好客戶的話反而害了自己、又如何一路爬上來把巨頭掀翻。',
  'path'  => '/idea/disruptive-innovation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 鮑爾與克里斯汀生',
  'heading'   => '破壞式創新，為什麼好公司會被爛東西幹掉',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/disruptive-innovation.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典,值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本,當你進門的橋。讀懂了觀念,更多用同一種眼光拆解的商業經典,都在拆書區等你。',
    'primary' => ['url' => '/lens', 'label' => '去看更多拆書'],
    'ghost'   => ['url' => '/idea', 'label' => '更多經典觀念'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '經典觀念',    'path' => '/idea'],
    ['name' => '破壞式創新',  'path' => '/idea/disruptive-innovation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
