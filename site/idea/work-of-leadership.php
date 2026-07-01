<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '領導的本業：把難題交還給團隊｜經典觀念',
  'desc'  => '領導最容易犯的錯，是把「要員工自己改變」的難題，當成「找專家就能解」的問題來處理。海菲茲的調適型領導提醒你：分清技術性問題與調適性挑戰，把工作交還給員工，並把壓力調到剛好的溫度。',
  'path'  => '/idea/work-of-leadership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 海菲茲與勞瑞',
  'heading'   => '領導的本業：把難題交還給團隊',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/work-of-leadership.html',
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
    ['name' => '領導的本業', 'path' => '/idea/work-of-leadership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
