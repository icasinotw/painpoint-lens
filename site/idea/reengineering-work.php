<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別自動化,砍掉重練:韓默的流程再造｜經典觀念',
  'desc'  => '很多公司花大錢上新系統,卻只是讓又慢又囉嗦的舊流程跑得更快。管理顧問韓默1990年在《哈佛商業評論》的經典主張是:別急著自動化,先問「如果今天一切重來,這件事會怎麼做」,把不必要的步驟整個砍掉重新設計。用台灣的請購簽核、餐廳點餐白話帶你抓住三個重點。',
  'path'  => '/idea/reengineering-work',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 麥可・韓默',
  'heading'   => '別自動化，砍掉重練：韓默的流程再造',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/reengineering-work.html',
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
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '別自動化,砍掉重練', 'path' => '/idea/reengineering-work'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
