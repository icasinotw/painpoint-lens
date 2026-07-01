<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '會不會做人,決定你會不會領導｜經典觀念',
  'desc'  => '技術最強的人升上主管,團隊卻散了——問題出在哪?哈佛商業評論經典〈What Makes a Leader?〉,心理學家丹尼爾・高曼1998年提出:IQ和專業只是入場門檻,把頂尖領導人分出來的是情緒智商(EQ)。白話帶你抓穩自我覺察、自我調節、動機、同理心、社交技巧五個成分,而且它們都練得出來。',
  'path'  => '/idea/what-makes-a-leader',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 丹尼爾・高曼',
  'heading'   => '會不會做人，決定你會不會領導',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/what-makes-a-leader.html',
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
    ['name' => '領導靠什麼', 'path' => '/idea/what-makes-a-leader'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
