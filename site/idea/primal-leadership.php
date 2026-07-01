<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '原始領導力：主管的情緒會傳染｜經典觀念',
  'desc'  => '領導最原始的一項工作，其實是管理團隊的情緒氣氛。高曼、鮑雅齊斯與麥基2001年在《哈佛商業評論》的〈Primal Leadership〉指出：主管的情緒會傳染，決定整個團隊的氛圍與表現。用便當店、手搖飲、社區診所的例子，帶你看懂共鳴型領導與EQ四力，怎麼把氣氛帶上去。',
  'path'  => '/idea/primal-leadership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 高曼、鮑雅齊斯與麥基',
  'heading'   => '原始領導力：主管的情緒會傳染',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/primal-leadership.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典，值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本，當你進門的橋。讀懂了觀念，更多用同一種眼光拆解的商業經典，都在拆書區等你。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '原始領導力', 'path' => '/idea/primal-leadership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
