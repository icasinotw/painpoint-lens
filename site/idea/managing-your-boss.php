<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '向上管理不是拍馬屁，是把你和老闆的關係經營好｜經典觀念',
  'desc'  => '哈佛經典〈Managing Your Boss〉的白話拆解。向上管理不是逢迎，是主動搞懂老闆的目標、壓力與溝通風格，也搞懂自己，把一段互相依賴的工作關係經營好——而這是部屬自己的責任。',
  'path'  => '/idea/managing-your-boss',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 加巴洛與科特',
  'heading'   => '向上管理不是拍馬屁，是把你和老闆的關係經營好',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/managing-your-boss.html',
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
    ['name' => '向上管理', 'path' => '/idea/managing-your-boss'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
