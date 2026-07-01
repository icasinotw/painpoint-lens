<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '好創業計畫書該講的四件事｜經典觀念',
  'desc'  => '創業計畫書別再堆一堆假的五年財務預測。哈佛薩爾曼1997年在《哈佛商業評論》的〈How to Write a Great Business Plan〉提醒：真正要講清楚的是人、機會、大環境、風險與報酬這四件會互相牽動的事。用台灣手搖飲加盟、小餐館創業、家族工廠轉型的例子白話拆解。',
  'path'  => '/idea/great-business-plan',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 威廉・薩爾曼',
  'heading'   => '好創業計畫書該講的四件事',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/great-business-plan.html',
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
    ['name' => '好創業計畫書該講的四件事', 'path' => '/idea/great-business-plan'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
