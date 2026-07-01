<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '只看月營收像看後照鏡開車｜經典觀念',
  'desc'  => '只看財務數字像只看後照鏡開車。卡普蘭與諾頓1992年在《哈佛商業評論》提出「平衡計分卡」：財務是落後指標，要再加顧客、內部流程、學習成長三個面向一起看，少數關鍵指標連動策略，才知道公司接下來會不會好。用手搖飲、便當店、巷口診所的例子白話拆解。',
  'path'  => '/idea/balanced-scorecard',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 卡普蘭與諾頓',
  'heading'   => '只看月營收像看後照鏡開車',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/balanced-scorecard.html',
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
    ['name' => '平衡計分卡', 'path' => '/idea/balanced-scorecard'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
