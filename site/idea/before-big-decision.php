<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '在你點頭之前，先用一張清單盤問那份提案｜經典觀念',
  'desc'  => '部屬拿來一份「保證會賺」的提案，你該點頭嗎？康納曼、洛瓦洛與希伯尼在《哈佛商業評論》提出一張決策品管清單：拍板前，逐條盤問提案背後藏著的偏誤——自利、愛上方案、只挑好證據、忽略基準率、低估最壞情況。',
  'path'  => '/idea/before-big-decision',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 康納曼等',
  'heading'   => '在你點頭之前，先用一張清單盤問那份提案',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/before-big-decision.html',
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
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '經典觀念',    'path' => '/idea'],
    ['name' => '決策品管清單', 'path' => '/idea/before-big-decision'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
