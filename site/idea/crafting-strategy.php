<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '好策略不是規劃出來的，是像捏陶一樣做出來的｜經典觀念',
  'desc'  => '明茲伯格 1987 年《哈佛商業評論》經典〈Crafting Strategy〉白話拆解。好策略不是會議室裡規劃出來的，是像陶匠捏陶、一邊做一邊長出來的。三分鐘搞懂刻意策略與浮現策略的差別，以及老闆真正的工作是看出模式。',
  'path'  => '/idea/crafting-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 亨利・明茲伯格',
  'heading'   => '好策略不是規劃出來的，是像捏陶一樣做出來的',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/crafting-strategy.html',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '策略是手工藝', 'path' => '/idea/crafting-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
